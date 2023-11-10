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
        User::factory(5)->create();
        user::create([
            'name' => 'bayu putro',
            'email' => 'bayuputro@gmail.com',
            'email_verified_at' => now(),
            'role' => 'admin',
            'password' => Hash::make('12345'),
        ]);

        user::create([
            'name' => 'bayu admin',
            'email' => 'bayuadmin@gmail.com',
            'email_verified_at' => now(),
            'role' => 'superadmin',
            'password' => Hash::make('12345'),
        ]);
    }
}
