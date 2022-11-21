<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use Spatie\Permission\Models\Role;

class RolSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role1 = Role::create(['name','Admin']);
        $role2 = Role::create(['name','@logger']);

        Permission::create(['name' => 'admim.home']);

        Permission::create(['name' => 'admim.categories.index']);
        Permission::create(['name' => 'admim.categories.create']);
        Permission::create(['name' => 'admim.categories.edit']);
        Permission::create(['name' => 'admim.categories.destroy']);   

        Permission::create(['name' => 'admim.tags.index']);
        Permission::create(['name' => 'admim.tags.create']);
        Permission::create(['name' => 'admim.tags.edit']);
        Permission::create(['name' => 'admim.tags.destroy']);   

        Permission::create(['name' => 'admim.posts.index']);
        Permission::create(['name' => 'admim.posts.create']);
        Permission::create(['name' => 'admim.posts.edit']);
        Permission::create(['name' => 'admim.posts.destroy']);
    }
}
