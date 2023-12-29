<?php

namespace Database\Factories;


use App\Models\Chata;
use App\Models\Pouzivatel;
use Illuminate\Database\Eloquent\Factories\Factory;

class ChataFactory extends Factory
{
    protected $model = Chata::class;

    public function definition(): array
    {
        return [
            "id" => $this->faker->id,
            "nazov" => $this->faker->text,
            "text" => $this->faker->text,
            "obrazok" => $this->faker->text,
            "url" => $this->faker->text,
        ];
    }
}


