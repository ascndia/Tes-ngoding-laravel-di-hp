<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleAndPermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Product Permissions
        Permission::create(['name' => 'add product']);
        Permission::create(['name' => 'view product']);
        Permission::create(['name' => 'edit product']);
        Permission::create(['name' => 'delete product']);

        // Sales Permission
        Permission::create(['name' => 'add sales']);
        Permission::create(['name' => 'view sales']);
        Permission::create(['name' => 'edit sales']);
        Permission::create(['name' => 'delete sales']);

        // User Permission
        Permission::create(['name' => 'add user']);
        Permission::create(['name' => 'view user']);
        Permission::create(['name' => 'edit user']);
        Permission::create(['name' => 'delete user']);
        
        // Report & Analytic Permission
        Permission::create(['name' => 'create report']);
        Permission::create(['name' => 'view sales analytic']);
        Permission::create(['name' => 'view product analytic']);
        Permission::create(['name' => 'view user analytic']);
        
        // Define Roles and Assign Permissions
        $superadmin = Role::create(['name' => 'superadmin']);
        
        $admin = Role::create(['name' => 'admin']);

        $admin->givePermissionTo('add sales');
        $admin->givePermissionTo('view sales');
        $admin->givePermissionTo('edit sales');
        $admin->givePermissionTo('delete sales');

        $admin->givePermissionTo('add product');
        $admin->givePermissionTo('view product');
        $admin->givePermissionTo('edit product');
        $admin->givePermissionTo('delete product');

        $admin->givePermissionTo('create report');
        $admin->givePermissionTo('view sales analytic');
        $admin->givePermissionTo('view product analytic');

        $cashier = Role::create(['name' => 'cashier']);

        $cashier->givePermissionTo('add sales');
        $cashier->givePermissionTo('view sales');
        $cashier->givePermissionTo('edit sales');
        $cashier->givePermissionTo('delete sales');

        $cashier->givePermissionTo('view product');

        $manager = Role::create(['name' => 'manager']);

        $manager->givePermissionTo('add sales');
        $manager->givePermissionTo('view sales');
        $manager->givePermissionTo('edit sales');
        $manager->givePermissionTo('delete sales');

        $manager->givePermissionTo('add product');
        $manager->givePermissionTo('view product');
        $manager->givePermissionTo('edit product');
        $manager->givePermissionTo('delete product');

        $manager->givePermissionTo('add user');
        $manager->givePermissionTo('view user');
        $manager->givePermissionTo('edit user');
        $manager->givePermissionTo('delete user');

        $manager->givePermissionTo('create report');
        $manager->givePermissionTo('view sales analytic');
        $manager->givePermissionTo('view product analytic');
        $manager->givePermissionTo('view user analytic');
        
    }
}
