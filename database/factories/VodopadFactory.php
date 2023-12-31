<?php

namespace Database\Factories;


use App\Models\Vodopad;
use Illuminate\Database\Eloquent\Factories\Factory;

class VodopadFactory extends Factory
{
    protected $model = Vodopad::class;

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


