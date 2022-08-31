<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class RecipeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'recipe_title' => $this->faker->sentence(),
            'recipe_section' => $this->faker->sentence(),
            'kitchenware' => $this->faker->sentence(),
            'ingredients' => $this->faker->sentence(),
            'recipe_the_steps_to_follow' => $this->faker->sentence(),
            'recipe_estimated_time' => $this->faker->sentence(),
            'recipe_image_end_result' => $this->faker->sentence(),
            'recipe_shelf_life' => $this->faker->sentence(),
            'recipe_commentary' => $this->faker->paragraph(5),
        ];
    }
}
