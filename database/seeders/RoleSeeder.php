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
       $role1 = Role::create(['name'=>'Admin']);
       $role2 = Role::create(['name'=>'profesor']);

                                //RUTA Name                   Role                  Roles
    //   Permission::create(['name'=>'welcome'])->assignRole($role1);  or ->assignRoles([$role1,$role2])
        
    
      


    }
}
