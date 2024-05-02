<?php

namespace Database\Seeders;

use App\Models\Service;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ServicesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i=0; $i < 5; $i++) {
            Service::create([
                "name" => Str::random(10),
                "description" => Str::random(50),
                "cost" => random_int(50, 70),
                "category_id" => random_int(1, 2)
            ]);
        }
    }
}
