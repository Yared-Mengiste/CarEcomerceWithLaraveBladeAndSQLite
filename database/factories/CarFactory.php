<?php

namespace Database\Factories;

use App\Models\CarType;
use App\Models\City;
use App\Models\FuelType;
use App\Models\Maker;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Model;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Car>
 */
class CarFactory extends Factory
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
            'maker_id' => Maker::inRandomOrder()->value('id'),
            'model_id' => function (array $attributes) {
                return Model::where('maker_id', $attributes['maker_id'])->inRandomOrder()->value('id');
            },

            'year' => $this->faker->year(),
            'price' => $this->faker->randomFloat(2, 1000000, 10000000),
            'vin' => strtoupper(Str::random(17)),
            'mileage'=> fake()-> randomFloat(2, 5, 500) * 1000,
            'car_type_id' => CarType::inRandomOrder()->value('id'),
            'fuel_type_id' => FuelType::inRandomOrder()->value('id'),
            'user_id' => User::inRandomOrder()->value('id'),
            'city_id' => City::inRandomOrder()->value('id'),
            'address' => fake()->address(),
            'phone' => function(array $attributes) {
                return User::find($attributes['user_id'])->phone;
            }
            ,
            'description' => fake()->text(2000),
            'published_at' => $this->faker->optional(0.9)->dateTimeBetween('-1 month', '+1 day'),

        ];
    }
}
