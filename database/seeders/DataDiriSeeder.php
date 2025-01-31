<?php

namespace Database\Seeders;

use App\Models\DataDiri;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DataDiriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DataDiri::factory(10)->create();
    }
}
