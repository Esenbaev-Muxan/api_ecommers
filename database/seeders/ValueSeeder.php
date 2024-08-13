<?php

namespace Database\Seeders;

use App\Models\Attribute;
use Illuminate\Database\Seeder;

class ValueSeeder extends Seeder
{

    public function run(): void
    {
        $attribute = Attribute::find(1);


        $attribute->values()->create([
            "name" => [
                "uz" => "Qizil",
                "ru" => "красный",
            ],
        ]);

        $attribute->values()->create([
            "name" => [
                "uz" => "qora",
                "ru" => "chorni",
            ],
        ]);

        $attribute->values()->create([
            "name" => [
                "uz" => "LOST",
                "ru" => "LOST",
            ],
        ]);


        $attribute = Attribute::find(2);

        $attribute->values()->create([
            "name" => [
                "uz" => "MDF",
                "ru" => "MDF",
            ],
        ]);

        $attribute->values()->create([
            "name" => [
                "uz" => "LOST",
                "ru" => "LOST",
            ],
        ]);
    }
}
