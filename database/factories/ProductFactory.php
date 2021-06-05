<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;

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
        $random_num=random_int(1000,10000);
        return [
            'user_id'=>User::all()->random()->id,
            'category_id'=>Category::all()->random()->id,
            'precio'=>$random_num,
            'nombre'=>$this->faker->name(),
            'imagen'=>$this->faker->image('public/storage/img/posts',600,480,null,false)
        ];
    }
}
