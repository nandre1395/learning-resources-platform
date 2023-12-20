<?php

namespace Database\Seeders;

use App\Models\category;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     */
    public function run(): void
    {
        $categories = Category::factory()->count(5)->create();

        foreach ($categories as $category) {
            Resource::factory()->count(5)->create([
                'category_id' => $category->id,
            ]);
    }
}
}