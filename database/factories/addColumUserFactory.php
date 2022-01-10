<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\addColumUser;
use Illuminate\Support\Str;

class addColumUserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    protected $model = addColumUser::class;
    public function definition()
    {
        $dt = $this->faker->dateTimeBetween($startDate = '-30 years', $endDate = 'now');
        $date = $dt->format("Y-m-d");
        return [
            'name' => $this->faker->name(),
            'email' => $this->faker->unique()->safeEmail(),
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
            'remember_token' => Str::random(10),
              'fecha_nacimento' => $date
        ];
    }
}
