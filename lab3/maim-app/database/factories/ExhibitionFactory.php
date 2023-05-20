<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Exhibition;

class ExhibitionFactory extends Factory
{
    protected $model = Exhibition::class;

    public function definition()
    {
        return [
            'name' => $this->faker->sentence,
            'theme' => $this->faker->word,
            'description' => $this->faker->paragraph,
            'start_date' => $this->faker->date(),
            'end_date' => $this->faker->date(),
        ];
    }
}
