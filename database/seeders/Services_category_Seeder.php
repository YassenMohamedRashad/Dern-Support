<?php

namespace Database\Seeders;

use App\Models\Services_category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Services_category_Seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = ["software", "hardware"];
        for ($i = 0; $i < count($categories); $i++) {
            Services_category::create([
                "name" => $categories[$i],
                "description" => "all".$categories[$i]."services",
            ]);
        }
    }
}
