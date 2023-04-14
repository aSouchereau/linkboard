<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Schema::disableForeignKeyConstraints();
        DB::Table('users')->truncate();
        DB::Table('groups')->truncate();
        DB::Table('links')->truncate();
        Schema::enableForeignKeyConstraints();

        User::factory(3)->create();

        $this->call(GroupSeeder::class);
        $this->call(LinkSeeder::class);
    }
}
