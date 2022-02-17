<?php

namespace Database\Seeders;

use App\Models\Link;
use App\Models\User;
use App\Models\Collection;
use Illuminate\Database\Seeder;

class LinkSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Link::factory(100)->create();
        // $data = [
        //     [
        //         'title' => 'HTML',
        //         'collection_id' => Collection::inRandomOrder()->value('id'),
        //         'owner_id' => User::inRandomOrder()->value('id'),
        //         'link' => 'https://zakirsoft.com/',
        //         'description' => 'This is a description',
        //         'created_at' => now()
        //     ],
        //     [
        //         'title' => 'CSS',
        //         'collection_id' => Collection::inRandomOrder()->value('id'),
        //         'owner_id' => User::inRandomOrder()->value('id'),
        //         'link' => 'https://zakirsoft.com/',
        //         'description' => 'This is a description',
        //         'created_at' => now()
        //     ],
        //     [
        //         'title' => 'JavaScript',
        //         'collection_id' => Collection::inRandomOrder()->value('id'),
        //         'owner_id' => User::inRandomOrder()->value('id'),
        //         'link' => 'https://zakirsoft.com/',
        //         'description' => 'This is a description',
        //         'created_at' => now()
        //     ],
        //     [
        //         'title' => 'Jquery',
        //         'collection_id' => Collection::inRandomOrder()->value('id'),
        //         'owner_id' => User::inRandomOrder()->value('id'),
        //         'link' => 'https://zakirsoft.com/',
        //         'description' => 'This is a description',
        //         'created_at' => now()
        //     ],
        //     [
        //         'title' => 'Vuejs',
        //         'collection_id' => Collection::inRandomOrder()->value('id'),
        //         'owner_id' => User::inRandomOrder()->value('id'),
        //         'link' => 'https://zakirsoft.com/',
        //         'description' => 'This is a description',
        //         'created_at' => now()
        //     ],
        //     [
        //         'title' => 'PHP',
        //         'collection_id' => Collection::inRandomOrder()->value('id'),
        //         'owner_id' => User::inRandomOrder()->value('id'),
        //         'link' => 'https://zakirsoft.com/',
        //         'description' => 'This is a description',
        //         'created_at' => now()
        //     ],
        //     [
        //         'title' => 'Laravel',
        //         'collection_id' => Collection::inRandomOrder()->value('id'),
        //         'owner_id' => User::inRandomOrder()->value('id'),
        //         'link' => 'https://zakirsoft.com/',
        //         'description' => 'This is a description',
        //         'created_at' => now()
        //     ],
        //     [
        //         'title' => 'Python',
        //         'collection_id' => Collection::inRandomOrder()->value('id'),
        //         'owner_id' => User::inRandomOrder()->value('id'),
        //         'link' => 'https://zakirsoft.com/',
        //         'description' => 'This is a description',
        //         'created_at' => now()
        //     ],
        //     [
        //         'title' => 'Nodejs',
        //         'collection_id' => Collection::inRandomOrder()->value('id'),
        //         'owner_id' => User::inRandomOrder()->value('id'),
        //         'link' => 'https://zakirsoft.com/',
        //         'description' => 'This is a description',
        //         'created_at' => now()
        //     ],
        //     [
        //         'title' => 'Mysql',
        //         'collection_id' => Collection::inRandomOrder()->value('id'),
        //         'owner_id' => User::inRandomOrder()->value('id'),
        //         'link' => 'https://zakirsoft.com/',
        //         'description' => 'This is a description',
        //         'created_at' => now()
        //     ]
        // ];

        // Link::insert($data);
    }
}
