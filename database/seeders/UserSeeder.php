<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

use Faker\Factory as Faker;
class UserSeeder extends Seeder
{
    public function run(): void
    {
        User::updateOrCreate(
            [
                'email' => 'user@gmail.com',
            ],
            [
                'name' => 'Normal User',
                'password' => Hash::make('12345678'),
                'role' => 'user',
            ]
        );
    }
}
