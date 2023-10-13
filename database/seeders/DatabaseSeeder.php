<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Category;
use App\Models\Project;
use App\Models\Service;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();
        Service::factory(6)->create();

        Category::create(['name' => 'Category 1']);
        Category::create(['name' => 'Category 2']);

        Project::factory(3)->create([
            'category_id' => 1
        ]);
        Project::factory(2)->create([
            'category_id' => 2
        ]);


        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
