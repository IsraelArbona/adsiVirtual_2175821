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


        // Creamos los roles
        $adminS = Role::create(['name' => 'Super-Administrador']);
        $admin =  Role::create(['name' => 'Administrador']);

        // Asignar los permisos Super-Administrador
        $adminS->givePermissionTo(Permission::all());
        $admin->givePermissionTo([
            'principal',
            'principal.users.index'
        ]);

        // Asignar el rol al usuario
        $adminS_user = User::find(1);
        $adminS_user->assignRole('Super-Administrador');

        $admin_user = User::find(2);
        $admin_user->assignRole('Administrador');

        



        



        
        
        
        

    }
}
