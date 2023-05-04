<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use Faker\Factory as FakerFactory;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = FakerFactory::create();

        for ($i = 0; $i < 100; $i++) {
            DB::table('categories')->insert([
                'name' => $faker->word,
                'symbol_code' => $faker->unique()->word,
                'activiti' => $faker->boolean,
                'created_at' => $faker->dateTimeBetween('-1 year', 'now'),
                'parent_category' => $faker->numberBetween(1, 10)
            ]);
        }
    }
}
