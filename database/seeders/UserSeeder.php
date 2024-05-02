<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            "name" => "yassen",
            "email" => "yassen". "@gmail.com",
            "password" => "123456789",
            "is_admin" => false
        ]);

        for ($i=0; $i < 10; $i++) {
            $user_name = "user". random_int(1000,9000);
            User::create([
                "name" => $user_name,
                "email" => $user_name . "@gmail.com",
                "password" => "123456789",
                "is_admin" => false
            ]);
        }

        for ($i = 1; $i < 4; $i++) {
            $user_name = "admin" . $i;
            User::create([
                "name" => $user_name,
                "email" => $user_name . "@gmail.com",
                "password" => "123456789",
                "is_admin" => true
            ]);
        }
    }
}
