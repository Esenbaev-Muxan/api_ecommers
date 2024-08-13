<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::create([
            'name' => [
                'uz' => 'Stol',
                'ru' => 'Стол',
            ],
        ]);



        $category =  Category::create([
            'name' => [
                'uz' => 'Kreslo',
                'ru' => 'Стол',
            ],
        ]);

        $category->childCategories()->create([
            'name' => [
                'uz' => 'Offis',
                'ru' => 'Offis',
            ],
        ]);
        $childCategories = $category->childCategories()->create([
            'name' => [
                'uz' => 'Gaming',
                'ru' => 'Gaming',
            ],
        ]);

        $childCategories->childCategories()->create([
            'name' => [
                'uz' => 'Rgb',
                'ru' => 'Rgb',
            ],
        ]);
        $childCategories->childCategories()->create([
            'name' => [
                'uz' => 'Women',
                'ru' => 'Women',
            ],
        ]);
        $childCategories->childCategories()->create([
            'name' => [
                'uz' => 'Black',
                'ru' => 'Black',
            ],
        ]);

        $category->childCategories()->create([
            'name' => [
                'uz' => 'Yumshoq',
                'ru' => 'Yumshoq',
            ],
        ]);


        Category::create([
            'name' => [
                'uz' => 'Yotop',
                'ru' => 'Стол',
            ],
        ]);
    }
}
