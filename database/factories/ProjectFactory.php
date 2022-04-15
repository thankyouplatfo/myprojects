<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ProjectFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
            'title' => $this->faker->realText(25),
            'description' => $this->faker->realText(2500),
            'status' => $this->faker->numberBetween(0, 2),
            'user_id' => '1',
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
