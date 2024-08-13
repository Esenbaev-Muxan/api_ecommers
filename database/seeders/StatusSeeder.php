<?php

namespace Database\Seeders;

use App\Models\Status;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Status::create([
            'name' => [
                'uz' => 'Yangi',
                'ru' => 'Yangi'
            ],
            'code' => 'new',
            'for' => 'order',
        ]);


        Status::create([
            'name' => [
                'uz' => 'Tastiqlandi',
                'ru' => 'Tastiqlandi',
            ],
            'code' => 'confirmed',
            'for' => 'order',
        ]);

        Status::create([
            'name' => [
                'uz' => 'Ishlanyapti',
                'ru' => 'Ishlanyapti'
            ],
            'code' => 'progressing',
            'for' => 'order',
        ]);

        Status::create([
            'name' => [
                'uz' => 'Yetkazib berilyapti',
                'ru' => 'Yetkazib berilyapti'
            ],
            'code' => 'shopping',
            'for' => 'order',
        ]);

        
        Status::create([
            'name' => [
                'uz' => 'Yetkazib berildi',
                'ru' => 'Yetkazib berildi'
            ],
            'code' => 'delivered',
            'for' => 'order',
        ]);

        Status::create([
            'name' => [
                'uz' => 'Tugatildi',
                'ru' => 'Tugatildi'
            ],
            'code' => 'completed',
            'for' => 'order',
        ]);

        Status::create([
            'name' => [
                'uz' => 'Yopildi',
                'ru' => 'Yopildi'
            ],
            'code' => 'closed',
            'for' => 'order',
        ]);

        Status::create([
            'name' => [
                'uz' => 'Bekor qilindi',
                'ru' => 'Bekor qilindi'
            ],
            'code' => 'canceled',
            'for' => 'order',
        ]);

        Status::create([
            'name' => [
                'uz' => 'Qaytarib berildi',
                'ru' => 'Qaytarib berildi'
            ],
            'code' => 'refunded',
            'for' => 'order',
        ]);

        Status::create([
            'name' => [
                'uz' => 'Tolov kutilmoqda',
                'ru' => 'Tolov kutilmoqda'
            ],
            'code' => 'waiting_payment',
            'for' => 'order',
        ]);

        Status::create([
            'name' => [
                'uz' => 'Tolandi',
                'ru' => 'Tolandi'
            ],
            'code' => 'paid',
            'for' => 'order',
        ]);

        Status::create([
            'name' => [
                'uz' => 'Tolovda xato',
                'ru' => 'Tolovda xato'
            ],
            'code' => 'payment_error',
            'for' => 'order',
        ]);


    }
}
