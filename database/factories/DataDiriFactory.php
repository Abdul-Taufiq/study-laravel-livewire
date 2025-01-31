<?php

namespace Database\Factories;

use App\Models\Kelas;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\DataDiri>
 */
class DataDiriFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nama' => fake()->name(),

            // definisi id, fungsi ini untuk membuat data dalam model kelas
            'kelas_id' => Kelas::factory(),
            // jika menggunakan perintah dibawah ini dengan tinker maka kelas dibuatkan 1 dan data diri dibuatkan 1 yang menjadi seperti relasi one to one
            // -- App\Models\DataDiri::factory(10)->create();
            // tapi jika ingin membuat data diri lebih banyak dari kelas atau menggunakan relasi one to many bisa menggunakan perintah ini
            // -- App\Models\DataDiri::factory(100)->recycle(App\Models\Kelas::factory(5)->create())->create();

            'jns_kelamin' => fake()->randomElement(['Laki-laki', 'Perempuan']),
            'goldar' => fake()->randomElement(['A', 'B', 'AB', 'O']),
            'alamat' => fake()->address(),
        ];
    }
}
