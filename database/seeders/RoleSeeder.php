<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

//Se importan los modelos Role y Permission para crear y usar
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
        //Se almacenan en variables llamadas Role1, Role2, Role3 (Roles)
        $role1 = Role::create(['name' => 'Admin']);
        $role2 = Role::create(['name' => 'Writer']);
        $role3 = Role::create(['name' => 'Reader']);

        Permission::create(['name' => 'home'])->syncRoles([$role1, $role2, $role3]);
        
        //Variable permission creada
        Permission::create(['name' => 'modulos.index'])->syncRoles([$role1, $role2, $role3]);
        Permission::create(['name' => 'modulos.create'])->syncRoles([$role1, $role2]);
        Permission::create(['name' => 'modulos.edit'])->syncRoles([$role1]);
        Permission::create(['name' => 'modulos.destroy'])->syncRoles([$role1]);


        Permission::create(['name' => 'categorias.index'])->syncRoles([$role1, $role2]);
        Permission::create(['name' => 'categorias.create'])->syncRoles([$role1, $role2]);
        Permission::create(['name' => 'categorias.edit'])->syncRoles([$role1]);
        Permission::create(['name' => 'categorias.destroy'])->syncRoles([$role1]);


        Permission::create(['name' => 'subestaciones.index'])->syncRoles([$role1, $role2]);
        Permission::create(['name' => 'subestaciones.create'])->syncRoles([$role1, $role2]);
        Permission::create(['name' => 'subestaciones.edit'])->syncRoles([$role1]);
        Permission::create(['name' => 'subestaciones.destroy'])->syncRoles([$role1]);


        Permission::create(['name' => 'users.index'])->syncRoles([$role1, $role2]);
        Permission::create(['name' => 'users.create'])->syncRoles([$role1, $role2]);
        Permission::create(['name' => 'users.edit'])->syncRoles([$role1]);
        Permission::create(['name' => 'users.destroy'])->syncRoles([$role1]);
        
        Permission::create(['name' => 'inventarios.index'])->syncRoles([$role1, $role2, $role3]);
        Permission::create(['name' => 'inventarios.create'])->syncRoles([$role1, $role2]);
        Permission::create(['name' => 'inventarios.edit'])->syncRoles([$role1]);
        Permission::create(['name' => 'inventarios.destroy'])->syncRoles([$role1]);


        Permission::create(['name' => 'encargados.index'])->syncRoles([$role1, $role2, $role3]);
        Permission::create(['name' => 'encargados.create'])->syncRoles([$role1, $role2]);
        Permission::create(['name' => 'encargados.edit'])->syncRoles([$role1]);
        Permission::create(['name' => 'encargados.destroy'])->syncRoles([$role1]);

        Permission::create(['name' => 'catalogos.index'])->syncRoles([$role1, $role2, $role3]);
        Permission::create(['name' => 'catalogos.create'])->syncRoles([$role1, $role2]);
        Permission::create(['name' => 'catalogos.edit'])->syncRoles([$role1]);
        Permission::create(['name' => 'catalogos.destroy'])->syncRoles([$role1]);
        
    }

}
