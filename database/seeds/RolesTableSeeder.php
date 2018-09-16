<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role_admin = factory(Role::class)->create([
            'name' => 'administrator',
            'guard_name' => 'web',
        ]);

        $role_admin = factory(Role::class)->create([
            'name' => 'student',
            'guard_name' => 'web',
        ]);
    }
}
