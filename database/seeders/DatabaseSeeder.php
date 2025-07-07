<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Post::factory(60)->create();

        // User::factory()->create([
        //     'name' => 'Super Admin',
        //     'email' => 'admin@pmptsp.metrokota.go.id',
        //     'password' => bcrypt('password'), // Use bcrypt for password hashing
        //     'role' => 'super_admin',
        // ]);
    }
}
