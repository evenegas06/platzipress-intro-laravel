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

        User::create([
            'name' => 'User Test',
            'email' => 'user@test.com',
            'password' => bcrypt('test')
        ]);
        
        User::factory()->count(2)->create();
        Post::factory()->count(24)->create();
        
    }
}
