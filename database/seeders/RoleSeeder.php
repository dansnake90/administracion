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
        $role2 = Role::create(['name' => 'ENTRENADOR']);
        $role3 = Role::create(['name' => 'PERSONAL TECNICO']);
        $role4 = Role::create(['name' => 'JEFE DE EQUIPO']);
        $role5 = Role::create(['name' => 'DELEGADO']);
        $role6 = Role::create(['name' => 'JUEZ']);
        $role7 = Role::create(['name' => 'MOZO DE CUADRA (GROOM)']);
        $role8 = Role::create(['name' => 'VETERINARIO']);
        $role9 = Role::create(['name' => 'PROPIETARIO DE CABALLOS']);
        $role10 = Role::create(['name' => 'MEDICO']);
        $role11 = Role::create(['name' => 'PERSONAL MEDICO']);
        $role12 = Role::create(['name' => 'KINESIOLOGO']);
        $role13 = Role::create(['name' => 'MASOTERAPEUTA']);
        $role14 = Role::create(['name' => 'PERSONAL ADMINISTRATIVO']);
        $role15 = Role::create(['name' => 'MISION']);
        $role16 = Role::create(['name' => 'PRENSA']);
        $role17 = Role::create(['name' => 'INVITADOS']);
        $role18 = Role::create(['name' => 'AUTORIDADES COCH']);
        $role19 = Role::create(['name' => 'AUTORIDADES IND - GOBIERNO']);
        $role20 = Role::create(['name' => 'DEPORTISTA']);
        $role21 = Role::create(['name' => 'COLABORADOR']);
        $role22 = Role::create(['name' => 'FEDERACION']);


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

        Permission::create(['name' => 'admin.fichas.index', 'description' => 'Ver listado de fichas'])->syncRoles([$role1, $role2]);;
        Permission::create(['name' => 'admin.posts.create', 'description' => 'Crear post'])->syncRoles([$role1]);;
        Permission::create(['name' => 'admin.posts.edit', 'description' => 'Editar post'])->syncRoles([$role1, $role2]);;
        Permission::create(['name' => 'admin.posts.destroy', 'description' => 'Eliminar post'])->syncRoles([$role1, $role2]);;
    }
}
