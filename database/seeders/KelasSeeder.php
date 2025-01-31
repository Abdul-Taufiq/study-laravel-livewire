<?php

namespace Database\Seeders;

use App\Models\Kelas;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class KelasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // jika ingin menyisipkan data (pembuatan manual)
        Kelas::create([
            'tingkat' => 'VII',
            'kelas' => 'A'
        ]);

        Kelas::create([
            'tingkat' => 'VII',
            'kelas' => 'B'
        ]);

        Kelas::create([
            'tingkat' => 'VII',
            'kelas' => 'C'
        ]);

        Kelas::create([
            'tingkat' => 'VIII',
            'kelas' => 'A'
        ]);

        Kelas::create([
            'tingkat' => 'VIII',
            'kelas' => 'B'
        ]);

        Kelas::create([
            'tingkat' => 'VIII',
            'kelas' => 'C'
        ]);

        Kelas::create([
            'tingkat' => 'IX',
            'kelas' => 'A'
        ]);

        Kelas::create([
            'tingkat' => 'IX',
            'kelas' => 'B'
        ]);

        Kelas::create([
            'tingkat' => 'IX',
            'kelas' => 'C'
        ]);

        // wajib jika menggunakan faker
        // Kelas::factory(5)->create();
    }
}
