<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Generator as Faker;

//$factory->define(Product::class,function (Faker $faker){
//    return [
//        'name' => $faker->word,
//        'detail' => $faker->paragraph,
//        'price' => $faker->numberBetween(100,1000),
//        'stock' => $faker->randomDigit,
//        'discount' => $faker->numberBetween(2,30)
//
//    ];
//});

class ProductFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Product::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */

    public function definition()
    {
        return [
            'name' => $this->faker->word,
            'detail' => $this->faker->paragraph,
            'price' => $this->faker->numberBetween(100,1000),
            'stock' => $this->faker->randomDigit,
            'discount' => $this->faker->numberBetween(2,30)
        ];
    }
}
