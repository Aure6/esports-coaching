<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Booking>
 */
class BookingFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'start_time' => $this->faker->dateTimeBetween('now', '+1 week'),
            'finish_time' => $this->faker->dateTimeBetween('+1 week', '+2 weeks'),
            // comments' => $this->faker->optional()->paragraph,
            'client_id' => Client::factory(),
            'coach_id' => Coach::factory(),
        ];
    }
}
