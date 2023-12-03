<?php

namespace Database\Factories;

use App\Models\Vrchol;
use Illuminate\Database\Eloquent\Factories\Factory;

class VrcholFactory extends Factory
{
    protected $model = Vrchol::class;

    public function definition(): array
    {
        return [
            'nazov_vrcholu' => $this->faker->word,
            'nadmorska_vyska_vrcholu' => $this->faker->numberBetween(500, 2500),
            'region' => $this->faker->word,
            'pohorie' => $this->faker->word,
            'region_2' => $this->faker->word,
        ];
    }
}
