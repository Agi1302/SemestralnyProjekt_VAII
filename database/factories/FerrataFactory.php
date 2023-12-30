<?php

namespace Database\Factories;


use App\Models\Ferrata;
use Illuminate\Database\Eloquent\Factories\Factory;

class FerrataFactory extends Factory
{
    protected $model = Ferrata::class;

    public function definition(): array
    {
        return [
            "id" => $this->faker->id,
            "nazov" => $this->faker->text,
            "text" => $this->faker->text,
            "obrazok" => $this->faker->text,
        ];
    }
}


