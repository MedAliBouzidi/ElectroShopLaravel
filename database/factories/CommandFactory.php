<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\DB;

class CommandFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $product = Product::all()->random(1)->first();
        $qte = rand(0, 10);
        return [
            'qte' => $qte,
            'total_price' => $qte * $product->price,
            'address' => $this->faker->address,
            'user_id' => rand(0, 200),
            'product_id' => $product->id,
        ];
    }
}
