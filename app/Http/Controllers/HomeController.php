<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\MyClass\ClassService;
use App\Services\Users\UserService;

class HomeController extends Controller
{
    protected $class;
    protected $user;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
        $this->class = new ClassService;
        $this->user = new UserService;
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $class = $this->class->getAll();
        $profiles = $this->user->read(auth()->user()->id);
        return view('home', compact('class', 'profiles'));
    }
}
