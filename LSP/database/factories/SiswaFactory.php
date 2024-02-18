<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Siswa>
 */
class SiswaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
        'nis' => $this->faker->unique()->numberBetween(10000000, 99999999), // Integer 8 digit yang berbeda-beda
        'kelas' => $this->faker->randomElement(['X', 'XI', 'XII']) // Memilih secara acak antara kelas X, XI, atau XII
        ];
    }
}
