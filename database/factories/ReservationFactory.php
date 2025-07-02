<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Reservation>
 */
class ReservationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "name"              => fake('id_ID')->name(),
            "reservation_count" => fake('id_ID')->randomNumber(1),
            "reservation_date"  => fake('id_ID')->dateTimeBetween('-24 months'),
        ];
    }
}
