<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class EventsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->name(),
            'data_start' => $this->faker->dateTime("now"),
            'data_end' => $this->faker->dateTimeBetween(30, "now"),
        ];
    }
}
