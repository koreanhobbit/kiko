<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $superadmin = \App\User::create([
        	'name' => 'ferry',
        	'email' => 'ferry@gmail.com',
        	'password' => Hash::make('password'),
        	'created_at' => new DateTime(),
        	'updated_at' => new DateTime()
        ]);

        $superadmin->assignRole('super-admin');

        $admin = \App\User::create([
        	'name' => 'admin',
        	'email' => 'admin@gmail.com',
        	'password' => Hash::make('password'),
        	'created_at' => new DateTime(),
        	'updated_at' => new DateTime()
        ]);

        $admin->assignRole('admin');

        $cust = \App\User::create([
        	'name' => 'cust',
        	'email' => 'cust@gmail.com',
        	'password' => Hash::make('password'),
        	'created_at' => new DateTime(),
        	'updated_at' => new DateTime()
        ]);

        $cust->assignRole('customer');
    }
}
