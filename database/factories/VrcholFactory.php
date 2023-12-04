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
            'stat' => $this->faker->word,
            'okres' => $this->faker->word,
            'nadmorska_vyska_vrcholu' => $this->faker->numberBetween(500, 3000),
            'pohorie' => $this->faker->word,
            'najlahsi_vystup_z' => $this->faker->word,
        ];
    }
}
