<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
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
                'name' => 'Zakir Hossen',
                'email' => 'web.zakirbd@gmail.com',
                'password' => bcrypt('password')
            ],
            [
                'name' => 'Developer Arif',
                'email' => 'developer@mail.com',
                'password' => bcrypt('password')
            ],
        ];

        User::insert($data);
    }
}
