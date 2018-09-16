<?php

namespace App\Services\Users;

use App\User;

class UserService
{
    protected $model;

    public function __construct()
    {
        $this->model = new User;
    }

    public function browse()
    {
        return $this->model->paginate();
    }

    public function read($id)
    {
        return $this->model->findOrFail($id);
    }

    public function store($payload)
    {
        return $this->model->create($payload);
    }

    public function update($id, $payload)
    {
        $user = $this->read($id);
        $user->update($payload);
        return $user;
    }

    public function delete($id)
    {
        return $this->model->destroy($id);
    }
}
