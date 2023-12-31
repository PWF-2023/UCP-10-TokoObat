<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class TransaksiFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nama_customer' => $this->faker->name(),
            'jumlah_item'   => $this->faker->randomNumber(1, 10),
            'total_item'    => $this->faker->numerify('#####'),
        ];
    }
}
