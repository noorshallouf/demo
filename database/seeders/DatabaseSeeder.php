<?php

namespace Database\Seeders;
use App\Models\Product;
//use App\Models\User;
//use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
          Category::factory(10)->create();

       // User::factory()->create([

    }
}
