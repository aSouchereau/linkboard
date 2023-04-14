<?php

namespace Database\Seeders;

use App\Models\Link;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LinkSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Generate default public links
        Link::factory()
            ->count(10)
            ->forUser([
                'username' => 'admin'
            ])
            ->forGroup([
                'name' => 'Default'
            ])
            ->create();

        // Generate user's private links
        Link::factory(10)->create();
    }
}
