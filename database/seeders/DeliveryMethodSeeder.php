<?php

namespace Database\Seeders;

use App\Models\DeliveryMethod;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DeliveryMethodSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DeliveryMethod::create([
            'name' => [
                'uz' => 'Tekin',
                'en' => 'Free'
            ],
            'estimated_time' => [
                'uz' => '5 kun',
                'en' => '5 days'
            ],
            'sum' => 0,
        ]);

        DeliveryMethod::create([
            'name' => [
                'uz' => 'Standard',
                'en' => 'Standard'
            ],
            'estimated_time' => [
                'uz' => '3 kun',
                'en' => '3 days'
            ],
            'sum' => 40000,
        ]);

        DeliveryMethod::create([
            'name' => [
                'uz' => 'Tez',
                'en' => 'Fast'
            ],
            'estimated_time' => [
                'uz' => '1 kun',
                'en' => '1 days'
            ],
            'sum' => 80000,
        ]);
    }
}
