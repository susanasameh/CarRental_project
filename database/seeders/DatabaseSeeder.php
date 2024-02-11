<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Car;
use App\Models\Category;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Contact;
use App\Models\Testimonial;
use App\Models\Trip;
use App\Models\Team;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory(10)->create();
        
       
        Contact::factory(10)->create();
        Testimonial::factory(10)->create();
        Category::factory(10)->create();
        Car::factory(10)->create();
        Trip::factory(10)->create();
        Team::factory(10)->create();
        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
