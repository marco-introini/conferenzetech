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
            'nome' => $this->faker->word(),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),

            'province_id' => Provincia::factory(),
        ];
    }
}
