<?php

namespace Database\Factories;

use App\Models\CarType;
use App\Models\FuelType;
use App\Models\Maker;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\CarFeatures>
 */
class CarFeaturesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //
            'abs'=>fake()->boolean(),
            'air_conditioning'=>fake()->boolean(),
            'power_window'=>fake()->boolean(),
            'power_door_locks'=>fake()->boolean(),
            'cruise_control'=>fake()->boolean(),
            'bluetooth_connectivity'=>fake()->boolean(),
            'remote_start'=>fake()->boolean(),
            'gps_navigation'=>fake()->boolean(),
            'heated_seats'=>fake()->boolean(),
            'climate_control'=>fake()->boolean(),
            'rear_parking_sensors'=>fake()->boolean(),
            'leather_seats'=>fake()->boolean(),

                  ];
    }
}
