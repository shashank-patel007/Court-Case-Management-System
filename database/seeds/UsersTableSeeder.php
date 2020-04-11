<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Role;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();
        DB::table('role_user')->truncate();

        $adminRole=Role::where('name','admin')->first();
        $advocateRole=Role::where('name','advocate')->first();
        $userRole=Role::where('name','user')->first();

        $admin = User::create([
        	'name'=>'Admin User',
        	'email'=>'admin@example.com',
        	'password'=> Hash::make('adminadmin')
        ]);
        $advocate = User::create([
        	'name'=>'Advocate User',
        	'email'=>'advocate@example.com',
        	'password'=> Hash::make('advocate')
        ]);
        $user = User::create([
        	'name'=>'Generic User',
        	'email'=>'user@example.com',
        	'password'=> Hash::make('user')
        ]);

        $admin->roles()->attach($adminRole);
        $advocate->roles()->attach($advocateRole);
        $user->roles()->attach($userRole);
    }
}
