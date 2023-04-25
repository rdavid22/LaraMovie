<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Movie;
use App\Models\User;
use Hash;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory()->create([
            'name' => 'Admin',
            'email' => 'admin@laramovie.com',
            'password' => Hash::make(12345678),
            'is_admin' => true
        ]);

        Movie::factory(7)->create(
            [
                'trailer' => 'https://www.youtube-nocookie.com/embed/_qAJMXfL6o0',
            ]
        );
    }
}
