<?php

namespace App\Services\Roles;

use Spatie\Permission\Models\Role;

class RoleService
{
    protected $role;

    public function __construct()
    {
        $this->role = new Role;
    }

    public function create($payload)
    {
        return $this->role->create($payload);
    }
}
