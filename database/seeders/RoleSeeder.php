<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

     
    public function run()
    {
        //Se llama al modelo Rol y se creamos los roles
        //Se almacenan en variables llamadas Role1, Role2, Role3
        $role1 = Role::create(['name' => 'Admin']);
        $role2 = Role::create(['name' => 'Writer']);
        $role3 = Role::create(['name' => 'Reader']);
        
        $permission = Permission::create(['name' => 'edit articles']);
    }

}
