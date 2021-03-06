<?php

use Illuminate\Database\Seeder;

use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\User;

class PermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Permiso del modulo principal
        Permission::create(['name' => 'principal']);

        // Permisos de usuarios
        Permission::create(['name' => 'principal.users.index']);
        Permission::create(['name' => 'principal.users.edit']);
        Permission::create(['name' => 'principal.users.show']);
        Permission::create(['name' => 'principal.users.create']);
        Permission::create(['name' => 'principal.users.destroy']);

        // Permisos de roles
        Permission::create(['name' => 'principal.roles.index']);
        Permission::create(['name' => 'principal.roles.edit']);
        Permission::create(['name' => 'principal.roles.show']);
        Permission::create(['name' => 'principal.roles.create']);
        Permission::create(['name' => 'principal.roles.destroy']);

        // Permisos de Pais
        Permission::create(['name' => 'principal.pais.index']);
        Permission::create(['name' => 'principal.pais.edit']);
        Permission::create(['name' => 'principal.pais.show']);
        Permission::create(['name' => 'principal.pais.create']);
        Permission::create(['name' => 'principal.pais.destroy']);

        // Permisos de Dpto
        Permission::create(['name' => 'principal.dptos.index']);
        Permission::create(['name' => 'principal.dptos.edit']);
        Permission::create(['name' => 'principal.dptos.show']);
        Permission::create(['name' => 'principal.dptos.create']);
        Permission::create(['name' => 'principal.dptos.destroy']);

        // Permisos de Ciudad
        Permission::create(['name' => 'principal.ciudads.index']);
        Permission::create(['name' => 'principal.ciudads.edit']);
        Permission::create(['name' => 'principal.ciudads.show']);
        Permission::create(['name' => 'principal.ciudads.create']);
        Permission::create(['name' => 'principal.ciudads.destroy']);


        // Creamos los roles
        $adminS = Role::create(['name' => 'Administrador-Super']);
        $admin =  Role::create(['name' => 'Administrador']);

        // Asignar los permisos Super-Administrador
        $adminS->givePermissionTo(Permission::all());
        $admin->givePermissionTo([
            'principal',
            'principal.users.index'
        ]);

        // Asignar el rol al usuario
        $adminS_user = User::find(1);
        $adminS_user->assignRole('Administrador-Super');

        $admin_user = User::find(2);
        $admin_user->assignRole('Administrador');

        



        



        
        
        
        

    }
}
