<?php

namespace Database\Seeders;

use App\Models\Role;
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

       $admin = User::create([
           'first_name' => 'Admin',
           'last_name' => 'Admin',
           'email' => 'admin@example.com',
           'phone' => '+9999535353',
            'password' => Hash::make('secret'),
        ]);

       $admin->roles()->attach(1);

       $admin = User::create([
           'first_name' => 'Ali',
           'last_name' => 'Valiyev',
           'email' => 'ali@example.com',
           'phone' => '+9999554353',
            'password' => Hash::make('secret'),
        ]);

       $admin->roles()->attach(2);

       User::factory()->count(10)->hasAttached(Role::find(2))->create();
    }
}
