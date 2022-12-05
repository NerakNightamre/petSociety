<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Pet>
 */
class PetFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'Species' => $this->faker->randomElement(['Gato', 'Perro', 'Otro']),
            'Gender' => $this->faker->randomElement(['H', 'M']),
            'Name' => $this->faker->firstName(),
            'Age' => $this->faker->numberBetween(0, 20),
            'Race' => $this->faker->randomElement(['Siames', 'Pug', 'Chihuahua', 'Beagle', 'Persa', 'Labrador']),
            'Comments' => $this->faker->paragraph(),
            //'owner_id' => $this->faker->$this->faker->numberBetween(0, 2),
            'file' => $this->faker->imageUrl(640, 480, 'animals', true)
        ];
    }
}