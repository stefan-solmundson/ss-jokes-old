<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
        	[
        		'name'=>'admin',
        		'email'=>'admin@example.com',
        		'email_verified_at'=>now(),
        		'password'=>Hash::make('Password1'),
        	],
        	[
        		'name'=>'adrian',
        		'email'=>'adrian@example.com',
        		'email_verified_at'=>now(),
        		'password'=>Hash::make('Password1'),
        	],
        	[
        		'name'=>'nickname',
        		'email'=>'nickname@example.com',
        		'email_verified_at'=>now(),
        		'password'=> Hash::make('Secret1'),
        	],
        ];

        foreach ($users as $user){
        	User::create($user);
        }
    }
}
