<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     * assignRole asignacion de roles
     * @Role create creacion de roles
     * Permission permisos del @Role
     */
    public function run()
    {
        Role::create(['name' => 'Admin']);
        Role::create(['name' => 'Teacher']);
        Role::create(['name' => 'User']);
        //RUTA Name                   Role                  Roles
        //   Permission::create(['name'=>'welcome'])->assignRole($role1);  or ->assignRoles([$role1,$role2])





    }
}
