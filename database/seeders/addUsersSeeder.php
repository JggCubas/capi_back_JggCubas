<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\addColumUser;
use App\Models\user_domicilio;

class addUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $newUsers =  addColumUser::factory()->count(100)->create();
        foreach ($newUsers as $user) {
          // code...
          user_domicilio::factory()->create([
              'user_id' => $user->id
         ]);
        }
    }
}
