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
                'name'=>'STUDENT_GIVEN_NAME',
                'email'=>'STUDENT_GIVEN_NAME@example.com',
                'email_verified_at'=>now(),
                'password'=> Hash::make('Secret1'),
            ],
            [
                'name'=>'Adrian G',
                'email'=>'adrian.g@example.com',
                'email_verified_at'=>now(),
                'password'=>Hash::make('Password1'),
            ],
            [
                'name'=>'Guido V',
                'email'=>'guido.v@example.com',
                'email_verified_at'=>now(),
                'password'=>Hash::make('Password1'),
            ],
            [
                'name'=>'Ivone B',
                'email'=>'ivone.b@example.com',
                'email_verified_at'=>now(),
                'password'=>Hash::make('Password1'),
            ],
            [
                'name'=>'Aaron C',
                'email'=>'aaron.c@example.com',
                'email_verified_at'=>now(),
                'password'=>Hash::make('Password1'),
            ],
            [
                'name'=>'Tony E',
                'email'=>'tony.e@example.com',
                'email_verified_at'=>null,
                'password'=>Hash::make('Password1'),
            ],
            [
                'name'=>'Paul W',
                'email'=>'paul.w@example.com',
                'email_verified_at'=>null,
                'password'=>Hash::make('Password1'),
            ],
            [
                'name'=>'Colleen C',
                'email'=>'colleen.c@example.com',
                'email_verified_at'=>null,
                'password'=>Hash::make('Password1'),
            ],
        ];

        foreach ($users as $user){
            User::create($user);
        }
    }
}
