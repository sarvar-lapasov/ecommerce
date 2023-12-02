<?php

namespace Database\Seeders;

use App\Models\Attribute;
use App\Models\Value;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ValueSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $attribute = Attribute::find(1);

        $attribute->values()->create([
            "name" => [
                'uz' => 'Qizil',
                'en' => 'Red'
            ]
        ]);

        $attribute->values()->create([
            "name" => [
                'uz' => 'Qora',
                'en' => 'Black'
            ]
        ]);

        $attribute->values()->create([
            "name" => [
                'uz' => 'Jigarrang',
                'en' => 'Brown'
            ]
        ]);


        $attribute2 = Attribute::find(2);

        $attribute2->values()->create([
            "name" => [
                'uz' => 'MDF',
                'en' => 'MDF.'
            ],
        ]);

        $attribute2->values()->create([
            "name" => [
                'uz' => 'LDSP',
                'en' => 'LDSP.'
            ]
        ]);
    }
}
