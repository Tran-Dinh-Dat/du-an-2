<?php

use Illuminate\Database\Seeder;
use App\Models\Role;
class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::table('roles')->truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

        $user = new Role();
        $user->name = 'user';
        $user->description = 'User Role';
        $user->save();

        $admin = new Role();
        $admin->name = 'admin';
        $admin->description = 'Admin Role';
        $admin->save();
    }
}
