<?php

namespace Database\Seeders;

use App\Models\Car;
use App\Models\Post;
use App\Models\User;
use App\Models\Voiture;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();
           // Post::factory(15)->create();
            //Car::factory(10)->create();
            Voiture::factory(10)->create();
       
    }
}
