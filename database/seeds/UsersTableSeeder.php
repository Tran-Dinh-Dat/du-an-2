<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Models\Role;
class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::table('user_role')->truncate();
        DB::table('users')->truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

        $user = Role::where('name', 'user')->first();
        $admin = Role::where('name', 'admin')->first();
        User::create([
            'name' => 'admin',
            'password' => bcrypt(123123123),
            'email' => 'admin@gmail.com'
        ])->roles()->attach($admin);

        User::create([
            'name' => 'user',
            'password' => bcrypt(123123123),
            'email' => 'user@gmail.com'
        ])->roles()->attach($user);
    }
}
