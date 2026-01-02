<?php

namespace Database\Seeders;

use App\Models\LaravelM;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LaravelMSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        LaravelM::factory()->count(50)->create();
    }
}
