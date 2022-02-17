<?php

namespace Database\Seeders;

use App\Models\Collection;
use App\Models\Space;
use App\Models\User;
use Illuminate\Database\Seeder;

class CollectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Space::inRandomOrder()->value('id')

        $data = [
            [
                'name' => 'HTML',
                'slug' => 'html',
                'space_id' => 1,
                'owner_id' => User::inRandomOrder()->value('id'),
                'short_link' => 'https://zakirsoft.com/',
                'created_at' => now()
            ],
            [
                'name' => 'CSS',
                'slug' => 'css',
                'space_id' => 1,
                'owner_id' => User::inRandomOrder()->value('id'),
                'short_link' => 'https://zakirsoft.com/',
                'created_at' => now()
            ],
            [
                'name' => 'JavaScript',
                'slug' => 'javascript',
                'space_id' => 1,
                'owner_id' => User::inRandomOrder()->value('id'),
                'short_link' => 'https://zakirsoft.com/',
                'created_at' => now()
            ],
            [
                'name' => 'Jquery',
                'slug' => 'jquery',
                'space_id' => 1,
                'owner_id' => User::inRandomOrder()->value('id'),
                'short_link' => 'https://zakirsoft.com/',
                'created_at' => now()
            ],
            [
                'name' => 'Vuejs',
                'slug' => 'vuejs',
                'space_id' => 1,
                'owner_id' => User::inRandomOrder()->value('id'),
                'short_link' => 'https://zakirsoft.com/',
                'created_at' => now()
            ],
            [
                'name' => 'PHP',
                'slug' => 'php',
                'space_id' => 2,
                'owner_id' => User::inRandomOrder()->value('id'),
                'short_link' => 'https://zakirsoft.com/',
                'created_at' => now()
            ],
            [
                'name' => 'Laravel',
                'slug' => 'laravel',
                'space_id' => 2,
                'owner_id' => User::inRandomOrder()->value('id'),
                'short_link' => 'https://zakirsoft.com/',
                'created_at' => now()
            ],
            [
                'name' => 'Python',
                'slug' => 'python',
                'space_id' => 2,
                'owner_id' => User::inRandomOrder()->value('id'),
                'short_link' => 'https://zakirsoft.com/',
                'created_at' => now()
            ],
            [
                'name' => 'Nodejs',
                'slug' => 'nodejs',
                'space_id' => 2,
                'owner_id' => User::inRandomOrder()->value('id'),
                'short_link' => 'https://zakirsoft.com/',
                'created_at' => now()
            ],
            [
                'name' => 'Mysql',
                'slug' => 'mysql',
                'space_id' => 2,
                'owner_id' => User::inRandomOrder()->value('id'),
                'short_link' => 'https://zakirsoft.com/',
                'created_at' => now()
            ]
        ];

        Collection::insert($data);
    }
}
