<?php

namespace Database\Factories;

use App\Models\Group;
use App\Models\User;
use AshAllenDesign\FaviconFetcher\Facades\Favicon;
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
        $urls = [
            "https://github.com",
            "https://about.gitlab.com/",
            "https://bitwarden.com/",
            "https://adguard.com/en/welcome.html",
            "https://lychee.electerious.com/",
            "https://www.photoprism.app/",
            "https://uptime.kuma.pet/",
            "https://vscode.dev/",
            "https://pi-hole.net/",
            "https://nextcloud.com/",
            "https://www.portainer.io/",
            "https://www.crowdsec.net/"
        ];
        $url = $urls[array_rand($urls)];

        $path = Favicon::fetchAll($url)->largest()->store('favicons', 'public');

        $userIds = User::pluck('id')->all();
        $groupIds = Group::pluck('id')->all();
        return [
            'name' => fake()->domainWord(),
            'description' => fake()->sentence(10),
            'url' => $url,
            'status_url' => fake()->url(),
            'icon_path' => $path,
            'user_id' => fake()->randomElement($userIds),
            'group_id' => fake()->randomElement($groupIds),
        ];
    }
}
