<?php

namespace Database\Seeders\Role;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;


class RolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $role1 = Role::create(['name' => 'Administrador']);
        $role2 = Role::create(['name' => 'Asistente']);
        $role3 = Role::create(['name' => 'Escritor']);
        $role4 = Role::create(['name' => 'Usuario']);


        //Permiso admin Dashboard
        Permission::create([
            'name' => 'admin.dashboard',
            'description'=> 'Ver panel administrativo ( Administrador, Asistente  y escritor )'
        ])->syncRoles([$role1, $role2,$role3]);

        //Permiso User Dashboard
        Permission::create([
            'name' => 'dashboard',
            'description'=> 'Ver panel administrativo usuarios'
        ])->syncRoles([$role4]);


        //Permiso Categorias
        Permission::create([
            'name' => 'admin.categories.index',
            'description'=> 'Listado de categorias'
        ])->syncRoles([$role1]);
        Permission::create([
            'name' => 'admin.categories.create',
            'description'=> 'Creación de categorias'
        ])->syncRoles([$role1]);
        Permission::create([
            'name' => 'admin.categories.edit',
            'description'=> 'Edición de categorias'
        ])->syncRoles([$role1]);
        Permission::create([
            'name' => 'admin.categories.destroy',
            'description'=> 'Eliminar categorias'
        ])->syncRoles([$role1]);


        //Permisos admin Estados
        Permission::create([
            'name' => 'admin.states.index',
            'description'=> 'Lista de Estados Disponibles'
        ])->syncRoles([$role1]);
        Permission::create([
            'name' => 'admin.states.create',
            'description'=> 'Creación de Estados'
        ])->syncRoles([$role1]);
        Permission::create([
            'name' => 'admin.states.edit',
            'description'=> 'Edición de Estados'
        ])->syncRoles([$role1]);
        Permission::create([
            'name' => 'admin.states.destroy',
            'description'=> 'Eliminar Estados'
        ])->syncRoles([$role1]);


        //Permisos admin Redes sociales
        Permission::create([
            'name' => 'admin.socialnetworks.index',
            'description'=> 'Lista de redes sociales'
        ])->syncRoles([$role1]);
        Permission::create([
            'name' => 'admin.socialnetworks.create',
            'description'=> 'Creación de redes sociales'
        ])->syncRoles([$role1]);
        Permission::create([
            'name' => 'admin.socialnetworks.edit',
            'description'=> 'Edición de redes sociales'
        ])->syncRoles([$role1]);
        Permission::create([
            'name' => 'admin.socialnetworks.destroy',
            'description'=> 'Eliminar redes sociales'
        ])->syncRoles([$role1]);



        //Permisos admin roles
        Permission::create([
            'name' => 'admin.roles.index',
            'description'=> 'Listado de roles'
        ])->syncRoles([$role1]);
        Permission::create([
            'name' => 'admin.roles.create',
            'description'=> 'Creación de roles'
        ])->syncRoles([$role1]);
        Permission::create([
            'name' => 'admin.roles.edit',
            'description'=> 'Edición de roles'
        ])->syncRoles([$role1]);
        Permission::create([
            'name' => 'admin.roles.show',
            'description'=> 'Detalle del rol'
        ])->syncRoles([$role1]);
        Permission::create([
            'name' => 'admin.roles.destroy',
            'description'=> 'Eliminación del rol'
        ])->syncRoles([$role1]);


        //Permisos admin usuarios
        Permission::create([
            'name' => 'admin.users.index',
            'description'=> 'Lista de usuarios'
        ])->syncRoles([$role1]);
        Permission::create([
            'name' => 'admin.users.create',
            'description'=> 'Creación de usuarios'
        ])->syncRoles([$role1]);
        Permission::create([
            'name' => 'admin.users.edit',
            'description'=> 'Edición de usuarios'
        ])->syncRoles([$role1]);
        Permission::create([
            'name' => 'admin.users.show',
            'description'=> 'Detalle del usuario'
        ])->syncRoles([$role1]);
        Permission::create([
            'name' => 'admin.users.destroy',
            'description'=> 'Eliminación de los usuarios'
        ])->syncRoles([$role1]);

        //Permisos Noticias
        Permission::create([
            'name' => 'admin.news.index',
            'description'=> 'Lista de noticias'
        ])->syncRoles([$role1]);
        Permission::create([
            'name' => 'admin.news.create',
            'description'=> 'Creación de noticias'
        ])->syncRoles([$role1]);
        Permission::create([
            'name' => 'admin.news.edit',
            'description'=> 'Edición de noticias'
        ])->syncRoles([$role1]);
        Permission::create([
            'name' => 'admin.news.show',
            'description'=> 'Detalle de noticias'
        ])->syncRoles([$role1]);
        Permission::create([
            'name' => 'admin.news.destroy',
            'description'=> 'Eliminación de las noticias'
        ])->syncRoles([$role1]);

    }
}
