<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;
use \App\Models\User;
use \App\Models\Post;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $user = User::factory()->create([
            'name' => 'Kaan Secen'
        ]);
    
        Post::factory(5)->create([
            'user_id' => $user->id
        ]);

    }
}
