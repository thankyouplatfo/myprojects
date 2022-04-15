<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class TaskFactory extends Factory
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
            'body'=>$this->faker->realText(33),
            'done'=> false,
            'project_id'=>$this->faker->randomDigitNotNull(1,10)
        ];
    }
}
