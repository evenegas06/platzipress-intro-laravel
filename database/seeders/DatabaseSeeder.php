<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Post;

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
            'name' => 'Eduardo Venegas',
            'email' => 'e@admin.com',
            'password' => bcrypt('123456')
        ]);
        
        Post::factory()->count(24)->create();
    }
}
