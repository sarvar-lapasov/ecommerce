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
               'uz' => 'Stul',
               'en' => 'Chair'
           ]
        ]);

        Category::create([
           'name' => [
               'uz' => 'Divan',
               'en' => 'Sofa'
           ]
        ]);

        Category::create([
           'name' => [
               'uz' => 'Stol',
               'en' => 'Table'
           ]
        ]);

        Category::create([
           'name' => [
               'uz' => 'Yotoq',
               'en' => 'Bed'
           ]
        ]);

        Category::create([
           'name' => [
               'uz' => 'Kreslo',
               'en' => 'Armchair'
           ]
        ]);
    }
}
