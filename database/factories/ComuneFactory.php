<?php

namespace Database\Factories;

use App\Models\Comune;
use App\Models\Provincia;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

class ComuneFactory extends Factory
{
    protected $model = Comune::class;

    public function definition(): array
    {
        return [
            'name' => $this->faker->city(),
            'province_id' => Provincia::inRandomOrder()->first()->id ?? Provincia::factory()->create(),

            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
    }
}
