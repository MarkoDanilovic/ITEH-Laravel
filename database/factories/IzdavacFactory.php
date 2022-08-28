<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class IzdavacFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'firma' => $this->faker->company(),
            'adresa' => $this->faker->streetAddress(),
            'grad' => $this->faker->city(),
            'sajt' => $this->faker->url(),
        ];
    }
}
