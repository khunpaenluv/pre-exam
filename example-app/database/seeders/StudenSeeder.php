<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Studen;

class StudenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Studen::factory()->count(10)->create();
    }
}
