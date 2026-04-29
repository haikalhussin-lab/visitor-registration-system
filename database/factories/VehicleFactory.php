<?php

namespace Database\Factories;

use App\Models\Vehicle;
use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Visitor;

/**
 * @extends Factory<Vehicle>
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
        return [
            'plate_number' => fake()->unique()->numerify('###-###'),
            'vehicle_type' => fake()->randomElement(['car', 'motorcycle', 'truck', 'bus', 'other']),
            'vehicle_color' => fake()->colorName(),
            'visitor_id' => Visitor::factory()->create()->id,
        ];
    }
}
