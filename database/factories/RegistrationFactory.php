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
        $user = User::inRandomOrder()->first() ?? User::factory()->create();

        // Scelgo una conference a cui questo utente NON è ancora registrato
        $conference = Conference::whereDoesntHave('registrations', function ($query) use ($user) {
            $query->where('user_id', $user->id);
        })
            ->inRandomOrder()
            ->first() ?? Conference::factory()->create();

        return [
            'public_message' => $this->faker->text(),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),

            'user_id' => $user->id,
            'conference_id' => $conference->id,
        ];
    }
}
