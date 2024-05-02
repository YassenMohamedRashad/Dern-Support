<?php

namespace Database\Seeders;

use App\Models\Feedback;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FeedbackSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i=0; $i < 5; $i++) {
            Feedback::create([
                "title" => "My feedback",
                "message" => "the best service ever",
                "user_id" => random_int(1, 5),
            ]);
        }
    }
}
