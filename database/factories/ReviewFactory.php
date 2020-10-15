<?php

namespace Database\Factories;

use App\Models\Product;
use App\Models\Review;
use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Generator as Faker;
//
//$factory->define(Review::class,function (Faker $faker){
//    return [
//        'product_id' => function(){
//            return Product::all()->random();
//        },
//        'customer' => $faker->word,
//        'review' => $faker->paragraph,
//        'star' => $faker->numberBetween(0,5)
//
//
//    ];
//});

class ReviewFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Review::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'product_id' => function(){
                return Product::all()->random();
            },
            'customer' => $this->faker->word,
            'review' => $this->faker->paragraph,
            'star' => $this->faker->numberBetween(0,5)
        ];
    }
}
