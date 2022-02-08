<?php

namespace Database\Factories;


use Illuminate\Database\Eloquent\Factories\Factory;
//use Faker\Generator as Faker;
use App\Models\Beverage;

class BeverageFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    protected $model = Beverage::class;

    public function definition()
    {

       // $factory->define(App\Models\Beverage::class, function (Faker $faker) {
           
            return [
                //
                'name' => $this->faker->name(),
                'type' => 'Softdrink'
            ];

       // });
     
    }
}
