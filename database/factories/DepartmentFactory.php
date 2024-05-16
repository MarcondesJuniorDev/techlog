<?php

namespace Database\Factories;

use App\Models\Department;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Department>
 */
class DepartmentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $name = $this->faker->unique()->company;
        return [
            'name' => $name,
            'responsible_id' => User::all()->random()->id,
            'parent_id' => Department::all()->isEmpty() ? null : Department::all()->random()->id,
            'author_id' => User::all()->random()->id,
            'order' => $this->faker->randomNumber(),
            'color' => $this->faker->hexColor,
            'slug' => Str::slug($name),
            'summary' => $this->faker->sentence,
            'description' => $this->faker->paragraph,
            'is_active' => $this->faker->boolean,
        ];
    }
}
