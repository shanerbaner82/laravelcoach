<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Developer>
 */
class DeveloperFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->name(),
            'x_handle' => $this->faker->userName(),
            'years_experience_php' => $this->faker->numberBetween(0, 10),
            'years_experience_other' => $this->faker->numberBetween(0, 10),
            'is_employed_as_dev' => $this->faker->boolean(),
            'ide' => $this->faker->randomElement(['VS Code', 'PhpStorm', 'Sublime Text', 'Other']),
            'willing_to_appear_on_camera' => $this->faker->boolean(),
            'has_video_experience' => $this->faker->boolean(),
            'interested_in_learning_laravel' => $this->faker->boolean(),
            'weekly_time_available' => $this->faker->numberBetween(1, 20),
            'learning_goal' => $this->faker->sentence(),
            'php_framework_experience' => $this->faker->randomElement(['None', 'Laravel', 'Symfony', 'CodeIgniter']),
            'learning_challenges' => $this->faker->sentence(),
            'preferred_learning_method' => $this->faker->randomElement(['Tutorials', 'Hands-on projects', 'Pair programming', 'Documentation']),
            'desired_project_type' => $this->faker->sentence(),
            'laravel_topics' => $this->faker->randomElement(['Eloquent', 'Blade', 'Livewire', 'Testing', 'Authentication']),
            'struggles' => $this->faker->sentence(),
            'comments' => $this->faker->sentence(),
        ];
    }
}
