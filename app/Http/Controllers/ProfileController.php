<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\Profiles\ProfileService;

class ProfileController extends Controller
{
    protected $service;

    public function __construct()
    {
        $this->middleware('auth');
        $this->service = new ProfileService;
    }

    public function updateProfile(Request $request)
    {
        $profile = $this->service->update(auth()->user()->id, $request->toArray());
        return response()->json([
            "message" => "sucess"
        ]);
    }
}
