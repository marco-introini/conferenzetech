<?php

namespace Database\Factories;

use App\Models\Conference;
use App\Models\Registration;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

class RegistrationFactory extends Factory
{
    protected $model = Registration::class;

    public function definition(): array
    {
        return [
            'public_message' => $this->faker->text(),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),

            'user_id' => User::inRandomOrder()->first() ?? User::factory(),
            'conference_id' => Conference::inRandomOrder()->first() ?? Conference::factory(),
        ];
    }
}
