<?php

namespace Database\Factories;

use App\Models\Pouzivatel;
use Illuminate\Database\Eloquent\Factories\Factory;

class PouzivatelFactory extends Factory
{
    protected $model = Pouzivatel::class;

    public function definition(): array
    {
        return [
            "meno" => $this->faker->firstName,
            "priezvisko" => $this->faker->lastName,
            "email" => $this->faker->unique()->safeEmail,
            "heslo" => $this->faker->password
        ];
    }
}
