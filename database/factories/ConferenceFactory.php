<?php

namespace Database\Factories;

use App\Models\Comune;
use App\Models\Conference;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

class ConferenceFactory extends Factory
{
    protected $model = Conference::class;

    public function definition(): array
    {
        return [
            'name' => $this->faker->text(20),
            'description' => $this->faker->text(),
            'user_id' => User::inRandomOrder()->first() ?? User::factory()->create(),
            'comune_id' => Comune::inRandomOrder()->first()->id ?? Comune::factory()->create(),
            'start_date' => fake()->dateTimeBetween('-1 month', '+1 month'),
            'end_date' => fake()->dateTimeBetween('+1 month', '+2 month'),
            'location' => $this->faker->address(),
            'url' => $this->faker->url(),

            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
    }
}
