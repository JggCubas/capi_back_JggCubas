<?php

namespace Database\Factories;


 use App\Models\user_domicilio;

use Illuminate\Database\Eloquent\Factories\Factory;

class user_domicilioFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */

    protected $model = user_domicilio::class;
    public function definition()
    {
      return [
          //
          'user_id' =>  $this->faker->unique()->numberBetween(1, 10000),
          'domicilio' => $this->faker->name(),
          'numero_exterior' => $this->faker->numberBetween(1, 10000),
          'colonia' => $this->faker->name(),
          'cp' => $this->faker->numberBetween(1, 100),
          'ciudad' => $this->faker->country(),
      ];
    }
}
