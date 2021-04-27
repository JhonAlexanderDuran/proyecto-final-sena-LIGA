<?php

use App\User;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name'                => 'Julian Rudas',
        	'document' => 1053801006,
        	'email' => 'jarras@gmail.com',
        	'password' => bcrypt('admin'),
        	'role' => 'Admin',
        	'phonenumber' => '8784841',
        ]);

        }
}
