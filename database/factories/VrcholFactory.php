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
            'nadmorska_vyska' => $this->faker->numberBetween(500, 3000),
            'pohorie' => $this->faker->word,
            'typ_tury' => $this->faker->randomElement(['horska', 'oddychova']),
            'narocnost' => $this->faker->randomElement(['lahka', 'stredna', 'tazka']),
            'dostupne_v_zime' => $this->faker->randomElement(['ano', 'nie']),
            'dlzka_trasy' => $this->faker->randomElement(['1-5', '5-10', '10+']),
            'dostupnost' => $this->faker->randomElement(['bez_vodcu', 's_vodcom']),
            'obrazok' => $this->faker->word
        ];
    }
}

