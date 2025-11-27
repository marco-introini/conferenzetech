<?php

namespace Database\Seeders;

use App\Models\Conference;
use App\Models\Registration;
use App\Models\User;
use Illuminate\Database\Seeder;

class RegistrationSeeder extends Seeder
{
    public function run(): void
    {
        $users = User::pluck('id');
        $conferences = Conference::pluck('id');

        // Tutte le coppie possibili user-conference
        $pairs = collect();

        foreach ($users as $userId) {
            foreach ($conferences as $conferenceId) {
                $pairs->push([
                    'user_id' => $userId,
                    'conference_id' => $conferenceId,
                ]);
            }
        }

        // Mischia e limita al numero che ti serve
        $wanted = 1000; // quante registrazioni vuoi creare
        $pairs = $pairs->shuffle()->take($wanted);

        // Crea le Registration con factory, garantendo l’unicità delle coppie
        $pairs->each(function (array $pair) {
            Registration::factory()->create($pair);
        });
    }
}
