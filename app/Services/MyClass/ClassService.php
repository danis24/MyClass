<?php

namespace App\Services\MyClass;

class ClassService
{
    protected $model;

    public function __construct()
    {
        $this->model = new MyClass;
    }

    public function browse()
    {
        return $this->model->paginate();
    }

    public function getAll()
    {
        return $this->model->get();
    }

    public function read($id)
    {
        return $this->model->findOrFail($id);
    }
}
