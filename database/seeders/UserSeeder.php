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
        User::factory(20)->create();
        user::create([
            'name' => 'bayu putro',
            'email' => 'bayuputro@gmail.com',
            'email_verified_at' => now(),
            'role' => 'admin',
            'phone' => '082220301741',
            'bio' => 'laravel developer',
            'password' => Hash::make('12345'),
        ]);

        user::create([
            'name' => 'bayu admin',
            'email' => 'bayuadmin@gmail.com',
            'email_verified_at' => now(),
            'role' => 'superadmin',
            'phone' => '081337919926',
            'bio' => 'flutter developer',
            'password' => Hash::make('12345'),
        ]);
        User::create([
            'name' => 'Thorik_tk',
            'email' => 'thoriktk@mail.com',
            'email_verified_at' => now(),
            'role' => 'user',
            'phone' => '081337919926',
            'bio' => 'flutter developer',
            'password' => Hash::make('11223344'),
        ]);
    }
}
