<?php

namespace Database\Seeders;


use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class CreateAdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        Permission::create(['name' => 'role-list'  ]);
        Permission::create(['name' => 'role-create' ]);
        Permission::create(['name' =>  'role-edit' ]);
        Permission::create(['name' =>  'role-delete'  ]);

        $role = Role::create(['name' => 'Super-Admin']);

        $role->givePermissionTo( 'role-list');
        $role->givePermissionTo('role-create' );
        $role->givePermissionTo( 'role-edit');
        $role->givePermissionTo( 'role-delete');

        $user = User::create([
            'name' => 'Super-Admin',
            'duty'=> 'Admin',
            'email' => 'admin@ediyt.com',
            'password' => Hash::make('Jesusbaby1'),


        ]);


        $user->assignRole($role);
    }
}
