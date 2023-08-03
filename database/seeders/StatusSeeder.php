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
            'name' =>[
                'uz' => 'Yangi',
                'en' => 'New',
            ],
            'code' => 'new',
            'for' => 'order'
        ]);

        Status::create([
            'name' =>[
                'uz' => 'Tasdiqlandi',
                'en' => 'Confirmed',
            ],
            'code' => 'confirmed',
            'for' => 'order'
        ]);

        Status::create([
            'name' =>[
                'uz' => 'Ishlanyapti',
                'en' => 'Processing',
            ],
            'code' => 'processing',
            'for' => 'order'
        ]);

        Status::create([
            'name' =>[
                'uz' => 'Yetkazilmoqda',
                'en' => 'Shipping',
            ],
            'code' => 'shipping',
            'for' => 'order'
        ]);

        Status::create([
            'name' =>[
                'uz' => 'Yetkazib berildi',
                'en' => 'Delivered',
            ],
            'code' => 'delivered',
            'for' => 'order'
        ]);

        Status::create([
            'name' =>[
                'uz' => 'Tugatildi',
                'en' => 'Completed',
            ],
            'code' => 'completed',
            'for' => 'order'
        ]);

        Status::create([
            'name' =>[
                'uz' => 'Yopildi',
                'en' => 'Closed',
            ],
            'code' => 'closed',
            'for' => 'order'
        ]);

        Status::create([
            'name' =>[
                'uz' => 'Bekor qilindi',
                'en' => 'Canceled',
            ],
            'code' => 'canceled',
            'for' => 'order'
        ]);

        Status::create([
            'name' =>[
                'uz' => 'Qaytarib berildi',
                'en' => 'Refunded',
            ],
            'code' => 'refunded',
            'for' => 'order'
        ]);

        Status::create([
            'name' =>[
                'uz' => 'To\'lov kutilmoqda',
                'en' => 'Waiting payment',
            ],
            'code' => 'waiting_payment',
            'for' => 'order'
        ]);

        Status::create([
            'name' =>[
                'uz' => 'To\'landi',
                'en' => 'Paid',
            ],
            'code' => 'paid',
            'for' => 'order'
        ]);

        Status::create([
            'name' =>[
                'uz' => 'To\'lovda xato',
                'en' => 'Payment error',
            ],
            'code' => 'payment_error',
            'for' => 'order'
        ]);
    }
}
