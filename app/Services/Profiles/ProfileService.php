<?php

namespace App\Services\Profiles;

use App\Services\Users\UserService;

class ProfileService
{
    protected $model;
    protected $user;

    public function __construct()
    {
        $this->model = new Profile;
        $this->user = new UserService;
    }

    public function read($id)
    {
        return $this->model->find($id);
    }

    public function update($id, $payload)
    {
        $profile = $this->model->where('user_id', $id);
        $profile->update($this->setProfile($payload));
        $this->user->update($id, $this->setUser($payload));
        return $profile;
    }

    private function setProfile($value)
    {
        return [
            "github" => $value["github"],
            "address" => $value["address"],
            "bio" => $value["bio"],
            "class_id" => $value["class"]
        ];
    }

    private function setUser($value)
    {
        return [
            "name" => $value["name"]
        ];
    }
}
