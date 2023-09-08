<?php

namespace Database\Factories;


use Faker\Factory as Faker;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition():array
    {

        $faker = Faker::create();

        return [
            'name' => $faker->unique()->Name(),
            'price' => $faker-> randomNumber(3),
            'category_id' => $faker-> numberBetween(1,3),
            'status' => $faker-> numberBetween(0,1),
            'is_favorite' => $faker-> numberBetween(0,1),
        ];
    }
}
