<?php

namespace Database\Seeders;

use App\Models\DataDiri;
use App\Models\Kelas;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // =================================================================
        // -- Perintah yang biasanya diketik di tinker
        // User::factory(10)->create();
        // DataDiri::factory(10)->recycle([
        //     Kelas::factory(5)->create()
        // ])->create();

        // =================================================================
        // -- Jika ingin menggunakan data sisipan agar disisipkan dalam faker
        // $kelas = Kelas::create([
        //     'tingkat' => 'VII',
        //     'kelas' => 'A'
        // ]);
        // DataDiri::factory(10)->recycle([
        //     $kelas,
        //     Kelas::factory(5)->create()
        // ])->create();

        // =================================================================
        // Jika menggunakan Seeder Terpisah
        $this->call([KelasSeeder::class]);
        DataDiri::factory(100)->recycle([
            Kelas::all()
        ])->create();

        // =================================================================
        // -- Menggunakan Factory
        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // =================================================================
        // -- Manual tanpa Factory
        // User::create([
        //     'nama' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
