<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

       $user = User::create([
           'first_name' => 'Admin',
           'last_name' => 'Admin',
           'email' => 'admin@example.com',
           'phone' => '+9999535353',
            'password' => Hash::make('password'),
        ]);

       $user->assignRole('admin');

       $user = User::create([
           'first_name' => 'Jamila',
           'last_name' => 'Valiyeva',
           'email' => 'jamila@example.com',
           'phone' => '+9999553648',
            'password' => Hash::make('password'),
        ]);

       $user->assignRole('editor');

       $user = User::create([
           'first_name' => 'Sanjar',
           'last_name' => 'Eshonqulov',
           'email' => 'sanjar@example.com',
           'phone' => '+9993353648',
            'password' => Hash::make('password'),
        ]);

       $user->assignRole('shop-manager');

       $user = User::create([
           'first_name' => 'Setora',
           'last_name' => 'Eshonqulova',
           'email' => 'setora@example.com',
           'phone' => '+9993344648',
            'password' => Hash::make('password'),
        ]);

       $user->assignRole('helpdesk-support');

       $user = User::create([
           'first_name' => 'Ali',
           'last_name' => 'Valiyev',
           'email' => 'ali@example.com',
           'phone' => '+9999554353',
            'password' => Hash::make('password'),
        ]);

       $user->assignRole('customer');

        $users = User::factory()->count(10)->create();
        foreach ($users as $user){
            $user->assignRole('customer');
        }
    }
}
