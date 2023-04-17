<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Group>
 */
class GroupFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $icons = [
            "bi-amd",
            "bi-android",
            "bi-apple",
            "bi-bank",
            "bi-basket",
            "bi-book",
            "bi-fast-forward",
            "bi-database",
            "bi-hdd-rack",
            "bi-lock",
            "bi-shield"
        ];
        $userIds = User::pluck('id')->all();
        return [
            'name' => fake()->colorName(),
            'icon' => fake()->randomElement($icons),
            'user_id' => fake()->randomElement($userIds),
        ];
    }
}
