<?php

namespace Database\Factories;

use App\Models\Recipe;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class RecipeFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Recipe::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
       // $name = $this->faker->sentence();
        return [
            'name' => $this->faker->sentence(),
            'slug' => Str::slug('Hola', '-'),
            'description' => $this->faker->paragraph()
        ];
    }
}
