<?php

use Illuminate\Database\Seeder;
use Caffeinated\Shinobi\Models\Permission;

class PermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Usuarios iniciales
        Permission::create([
            'name' => 'Navegar usuarios',
            'slug' => 'users.index',
            'description' => 'Lista y navega todos los usuarios del sistema'
        ]);

        Permission::create([
            'name' => 'Ver detalle de los usuarios',
            'slug' => 'users.show',
            'description' => 'Ver detalle de usuario usuario del sistema'
        ]);

        Permission::create([
            'name' => 'Edición de usuarios',
            'slug' => 'users.edit',
            'description' => 'Edita cualquier usuario del sistema'
        ]);

        Permission::create([
            'name' => 'Eliminar usuarios',
            'slug' => 'users.destroy',
            'description' => 'Eliminar cualquier usuario del sistema'
        ]);
        
        
        
        //Roles iniciales
        Permission::create([
            'name' => 'Navegar roles',
            'slug' => 'roles.index',
            'description' => 'Lista y navega todos los roles del sistema'
        ]);

        Permission::create([
            'name' => 'Ver detalle del rol',
            'slug' => 'roles.show',
            'description' => 'Ver detalle de cada rol del sistema'
        ]);

        Permission::create([
            'name' => 'Creación de roles',
            'slug' => 'roles.create',
            'description' => 'Crea cualquier rol del sistema'
        ]);

        Permission::create([
            'name' => 'Edición de roles',
            'slug' => 'roles.edit',
            'description' => 'Edita cualquier rol del sistema'
        ]);

        Permission::create([
            'name' => 'Eliminar rol',
            'slug' => 'roles.destroy',
            'description' => 'Eliminar cualquier rol del sistema'
        ]);


        //Productos iniciales
        Permission::create([
            'name' => 'Navegar productos',
            'slug' => 'products.index',
            'description' => 'Lista y navega todos los productos del sistema'
        ]);

        Permission::create([
            'name' => 'Ver detalle de los productos',
            'slug' => 'products.show',
            'description' => 'Ver detalle de cada producto del sistema'
        ]);

        Permission::create([
            'name' => 'Creación de productos',
            'slug' => 'products.create',
            'description' => 'Crea cualquier producto del sistema'
        ]);

        Permission::create([
            'name' => 'Edición de productos',
            'slug' => 'products.edit',
            'description' => 'Edita cualquier producto del sistema'
        ]);

        Permission::create([
            'name' => 'Eliminar productos',
            'slug' => 'products.destroy',
            'description' => 'Eliminar cualquier producto del sistema'
        ]);
    }
}
