<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $name = array('Refrigerator', 'Washing Machine', 'Plaque')[rand(0, 2)];
        $marque = array('Samsung', 'LG', 'Condor')[rand(0, 2)];
        return [
            'name'     => ucfirst($name),
            'price'    => rand(500.0, 1500.0),
            'color'    => $this->faker->colorName(),
            'desc'     => $this->faker->sentence(200),
            'category' => ucfirst($name),
            'marque'   => $marque,
            'rate'   => rand(0, 5),
            'image'    => 'assets/img/'.Str::slug($name).'-'.rand(1, 4).'.png',
        ];
    }
}
