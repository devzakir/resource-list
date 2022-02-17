<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Database\Seeders\SpaceSeeder;
use Database\Seeders\CollectionSeeder;
use Database\Seeders\LinkSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call([
            UserSeeder::class,
            SpaceSeeder::class,
            CollectionSeeder::class,
            LinkSeeder::class,
        ]);
    }
}
