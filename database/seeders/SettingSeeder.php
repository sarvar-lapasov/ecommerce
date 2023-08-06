<?php

namespace Database\Seeders;

use App\Enums\SettingType;
use App\Models\Setting;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $setting = Setting::create([
           'name' => [
               'uz' => 'Til',
               'en' => 'Language'
           ],
            'type' => SettingType::SELECT->value,
        ]);

        $setting->values()->create([
            'name' => [
                'uz' => 'O\'zbekcha',
                'en' => 'O\'zbekcha'
            ]
        ]);

        $setting->values()->create([
            'name' => [
                'uz' => 'English',
                'en' => 'English'
            ]
        ]);


        $setting = Setting::create([
           'name' => [
               'uz' => 'Pul birligi',
               'en' => 'Pul birligi'
           ],
            'type' => SettingType::SELECT->value,
        ]);

        $setting->values()->create([
            'name' => [
                'uz' => 'So\'m',
                'en' => 'So\'m'
            ]
        ]);

        $setting->values()->create([
            'name' => [
                'uz' => 'Dollar',
                'en' => 'Dollar'
            ]
        ]);

        $setting = Setting::create([
           'name' => [
               'uz' => 'Dark Mode',
               'en' => 'Dark Mode'
           ],
            'type' => SettingType::SWITCH->value,
        ]);

        $setting = Setting::create([
           'name' => [
               'uz' => 'Xabarnomalar',
               'en' => 'Notifications'
           ],
            'type' => SettingType::SWITCH->value,
        ]);


    }
}
