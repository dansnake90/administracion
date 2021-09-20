<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
//importo el modelo permission
use Spatie\Permission\Models\Permission;
//importar el modelo role
use Spatie\Permission\Models\Role;



class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role1 = Role::create(['name' => 'Admin']);
        $role2 = Role::create(['name' => 'Blogger']);
    
        //se crea el permiso con más de un rol
        Permission::create(['name' => 'admin.index', 'description' => 'Ver administración'])->syncRoles([$role1, $role2]);
    
        Permission::create(['name' => 'admin.users.index', 'description' => 'Ver lista de usuarios'])->syncRoles([$role1]);;
        Permission::create(['name' => 'admin.users.create', 'description' => 'crear un usuario'])->syncRoles([$role1]);;
        Permission::create(['name' => 'admin.users.edit', 'description' => 'editar un usuario'])->syncRoles([$role1]);;

        Permission::create(['name' => 'admin.categories.index', 'description' => 'Ver listado de categorias'])->syncRoles([$role1, $role2]);;
        Permission::create(['name' => 'admin.categories.create', 'description' => 'Crear categoría'])->syncRoles([$role1]);;
        Permission::create(['name' => 'admin.categories.edit', 'description' => 'Editar categoría'])->syncRoles([$role1]);;
        Permission::create(['name' => 'admin.categories.destroy', 'description' => 'Eliminar categoría'])->syncRoles([$role1]);;
        
        Permission::create(['name' => 'admin.tags.index', 'description' => 'Ver listado de etiquetas'])->syncRoles([$role1, $role2]);;
        Permission::create(['name' => 'admin.tags.create', 'description' => 'Crear etiqueta'])->syncRoles([$role1]);;
        Permission::create(['name' => 'admin.tags.edit', 'description' => 'Editar etiqueta'])->syncRoles([$role1]);;
        Permission::create(['name' => 'admin.tags.destroy', 'description' => 'Eliminar etiqueta'])->syncRoles([$role1]);;

        Permission::create(['name' => 'admin.posts.index', 'description' => 'Ver listado de post'])->syncRoles([$role1, $role2]);;
        Permission::create(['name' => 'admin.posts.create', 'description' => 'Crear post'])->syncRoles([$role1]);;
        Permission::create(['name' => 'admin.posts.edit', 'description' => 'Editar post'])->syncRoles([$role1, $role2]);;
        Permission::create(['name' => 'admin.posts.destroy', 'description' => 'Eliminar post'])->syncRoles([$role1, $role2]);;
    }
}
