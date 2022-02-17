<?php

namespace Database\Seeders;

use App\Models\Space;
use Illuminate\Database\Seeder;

class SpaceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'title' => 'Frontend',
                'slug' => 'frontend',
                'created_at' => now()
            ],
            [
                'title' => 'Backend',
                'slug' => 'backend',
                'created_at' => now()
            ]
        ];

        Space::insert($data);
    }
}
