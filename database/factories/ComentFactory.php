<?php

namespace Database\Factories;

use App\Models\Coment;
use App\Models\Product;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class ComentFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Coment::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'product_id'=>Product::all()->random()->id,
            'user_id'=>User::all()->random()->id,
            'message'=>$this->faker->sentence(25)
        ];
    }
}
