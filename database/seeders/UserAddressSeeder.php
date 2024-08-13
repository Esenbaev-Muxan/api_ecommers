<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserAddressSeeder extends Seeder
{
    
    public function run(): void
    {
        

        User::find(5)->addresses()->create([
            "latitude" => "41.310014", 
            "longitude" => "69.28074", 
            "region" => "Tashkent", 
            "district" => "Mirabad Tumani", 
            "street" => "mingurik", 
            "home" => "78",
        ]);

        User::find(2)->addresses()->create([
            "latitude" => "41.310014", 
            "longitude" => "69.28074", 
            "region" => "Tashkent", 
            "district" => "Mirzo U Tumani", 
            "street" => "Navbaohr Mohallasi", 
            "home" => "123",
        ]);
    }
}
