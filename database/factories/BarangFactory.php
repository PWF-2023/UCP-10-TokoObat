<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;


class BarangFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nama_barang'  => $this->faker->text(20),
            'stok_barang'  => $this->faker->randomNumber(1, 20),
            'harga_barang' => $this->faker->numerify('#####'),
            'is_available' => $this->faker->boolean(),
        ];
    }
}