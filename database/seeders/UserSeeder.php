<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
 
    public function run(): void
    {

        $user = User::create([
            'first_name' => 'Admin',
            'last_name' => 'Admin',
            'email' => 'admin@gmail.com',
            'phone' => '+9999999',
            'password' => Hash::make('secret123'),
        ]);
        $user->assignRole('admin');


        $user = User::create([
            'first_name' => 'Muxan',
            'last_name' => 'Esenbaev',
            'email' => 'user@gmail.com',
            'phone' => '+9999996789',
            'password' => Hash::make('secret123'),
        ]);
        $user->assignRole('editor');

        $user1 = User::create([
            'first_name' => 'shop',
            'last_name' => 'manager',
            'email' => 'shop@gmail.com',
            'phone' => '+99999967829',
            'password' => Hash::make('secret123'),
        ]);
        $user1->assignRole('shop-menager');


        $user = User::create([
            'first_name' => 'helper',
            'last_name' => 'helper',
            'email' => 'help@gmail.com',
            'phone' => '+9999967829',
            'password' => Hash::make('secret123'),
        ]);
        $user->assignRole('helpdesk-support');

        
        $user = User::create([
            'first_name' => 'Muxan',
            'last_name' => 'Esenbaev',
            'email' => 'user1@gmail.com',
            'phone' => '+99999967892',
            'password' => Hash::make('secret123'),
        ]);
        $user->assignRole('customer');
 

        // $admin->roles()->attach(1);


        $users = User::factory()->count(10)->create();

        foreach ($users as $user) {
            $user->assignRole('customer');
        }
    }
}
