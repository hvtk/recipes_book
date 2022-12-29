<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Recipe;
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
        // User::factory(10)->create();

        // Recipe::factory(6)->create();

        //The code behind creates a relation between the 6 recipes to the user
        $user = User::factory()->create([
            'name' => 'John Doe',
            'email' => 'john@gmail.com'
        ]);

        Recipe::factory(6)->create([
            'user_id' => $user->id
        ]);
    }
}
