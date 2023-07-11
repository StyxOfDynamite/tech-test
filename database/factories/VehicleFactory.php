<?php

namespace Database\Factories;

use Faker\Provider\Fakecar;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Vehicle>
 */
class VehicleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $this->faker->addProvider(new Fakecar($this->faker));

        $brand = $this->faker->vehicleBrand();
        return [
            'make' => $brand,
            'model' => $this->faker->vehicleModel($brand),
            'registration' => $this->faker->vehicleRegistration(),
        ];
    }
}
