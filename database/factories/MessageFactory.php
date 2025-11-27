<?php

namespace Database\Factories;

use App\Models\Message;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

class MessageFactory extends Factory
{
    protected $model = Message::class;

    public function definition(): array
    {
        return [
            'sender_id' => User::inRandomOrder()->first() ?? User::factory()->create(),
            'receiver_id' => User::inRandomOrder()->first() ?? User::factory()->create(),
            'message' => $this->faker->text(),
            'stream_id' => $this->faker->word(),

            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
    }
}
