<?php

namespace Database\Seeders;

use App\Models\Request;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RequestSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 0; $i < 5; $i++) {
            $status = ["in progress", "completed"];
            Request::create([
                "total_cost" => random_int(70,190),
                "details" => "i want to fix my problem",
                "status" => $status[array_rand(["in_progress", "completed"])],
                "user_id" => random_int(1,5),
                "service_id" => random_int(1,5),
            ]);
        }
    }
}
