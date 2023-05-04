<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use Faker\Factory as FakerFactory;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = FakerFactory::create();

        for ($i = 0; $i < 100; $i++) {
            DB::table('products')->insert([
                'category_id' => $faker->numberBetween(1, 10),
                'name' => $faker->word,
                'symbol_code' => Str::slug($faker->unique()->word),
                'description' => $faker->paragraph,
                'added_at' => $faker->dateTimeBetween('-1 year', 'now'),
                'cost' => $faker->numberBetween(1, 10000),
                'image' => $faker->imageUrl(),
                'count' => $faker->numberBetween(1, 100)
            ]);
        }
    }
}
