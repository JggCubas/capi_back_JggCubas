<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\user_domicilio;

class user_domicilioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        user_domicilio::factory()->count(100)->create();
    }
}
