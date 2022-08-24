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
     */
    public function run()
    {
        //
        $role1 = Role::create(['name' => 'Admin']);
        $role2 = Role::create(['name' => 'Encargado']);
        $role3 = Role::create(['name' => 'Usuario']);

        $permission1 = Permission::create(['name' => 'inventario.index']);
        $permission2 = Permission::create(['name' => 'inventario.create']);
        $permission3 = Permission::create(['name' => 'inventario.update']);
        $permission4 = Permission::create(['name' => 'inventario.delete']);
        $permission5 = Permission::create(['name' => 'usuarios.index']);
        $permission6 = Permission::create(['name' => 'usuarios.create']);
        $permission7 = Permission::create(['name' => 'usuarios.update']);
        $permission8 = Permission::create(['name' => 'usuarios.delete']);
        $permission9 = Permission::create(['name' => 'ventas.index']);
        $permission10 = Permission::create(['name' => 'ventas.create']);
        $permission11 = Permission::create(['name' => 'ventas.update']);
        $permission12 = Permission::create(['name' => 'ventas.delete']);
        $permission13 = Permission::create(['name' => 'usuarios.asignarrol']);

        


        $role1->givePermissionTo($permission1);
        $role1->givePermissionTo($permission2);
        $role1->givePermissionTo($permission3);
        $role1->givePermissionTo($permission4);
        $role1->givePermissionTo($permission5);
        $role1->givePermissionTo($permission6);
        $role1->givePermissionTo($permission7);
        $role1->givePermissionTo($permission8);
        $role1->givePermissionTo($permission9);
        $role1->givePermissionTo($permission10);
        $role1->givePermissionTo($permission11);
        $role1->givePermissionTo($permission12);
        $role1->givePermissionTo($permission13);

        $role2->givePermissionTo($permission1);
        $role2->givePermissionTo($permission2);
        $role2->givePermissionTo($permission3);
        $role2->givePermissionTo($permission4);
        $role2->givePermissionTo($permission9);
        $role2->givePermissionTo($permission10);
        $role2->givePermissionTo($permission11);
        $role2->givePermissionTo($permission12);

        $role3->givePermissionTo($permission9);
        $role3->givePermissionTo($permission10);
        $role3->givePermissionTo($permission11);
        $role3->givePermissionTo($permission12);

        

    }
}
