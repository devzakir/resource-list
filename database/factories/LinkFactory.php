<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\Collection;
use Illuminate\Database\Eloquent\Factories\Factory;

class LinkFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->name(3),
            'collection_id' => Collection::inRandomOrder()->value('id'),
            'owner_id' => User::inRandomOrder()->value('id'),
            'link' => $this->faker->url,
            'description' => $this->faker->sentence,
        ];
    }
}
