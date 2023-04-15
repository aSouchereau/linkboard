<?php

namespace Database\Factories;

use App\Models\Group;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Link>
 */
class LinkFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $userIds = User::pluck('id')->all();
        $groupIds = Group::pluck('id')->all();
        return [
            'name' => fake()->domainWord(),
            'description' => fake()->sentence(10),
            'url' => fake()->url(),
            'status_url' => fake()->url(),
            'icon_path' => fake()->imageUrl(),
            'user_id' => fake()->randomElement($userIds),
            'group_id' => fake()->randomElement($groupIds),
        ];
    }
}
