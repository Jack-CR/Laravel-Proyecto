<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Coment;
use App\Models\Product;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        User::create([
            'name'=>'Yacdany Arguedas Mora',
            'email'=>'jack20-21@hotmail.com',
            'password'=>bcrypt('12345'),
            'telefono'=>'88888888',
            'provincia'=>'Cartago',
            'direccion'=>'cartago,turrialba'
        ]);

        User::create([
            'name'=>'Tatiana Sandoval Araya',
            'email'=>'tati@gmail.com',
            'telefono'=>'88888888',
            'password'=>bcrypt('12345'),
            'provincia'=>'Cartago',
            'direccion'=>'cartago,turrialba'
        ]);
        User::factory(7)->create();
        Category::factory(5)->create();
        Product::factory(50)->create();
        Coment::factory(30)->create();
    }
}
