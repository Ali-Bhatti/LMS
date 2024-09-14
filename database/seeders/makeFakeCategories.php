<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;
use Illuminate\Support\Str;
use App\Models\Category; // Add this line to import the Category model

class makeFakeCategories extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        // Insert parent categories
        foreach (range(1, 10) as $index) {
            DB::table('categories')->insert([
                'parent_id' => null,
                'title' => Str::random(10) . ' ' . Str::random(6)
            ]);
        }

        // Fetch categories without parent_id
        $categories = Category::all();

        // Insert child categories
        foreach ($categories as $category) {
            foreach (range(1, random_int(2, 6)) as $index) {
                DB::table('categories')->insert([
                    'parent_id' => $category->id,
                    'title' => Str::random(5) . ' ' . Str::random(6)
                ]);
            }
        }
    }
}
