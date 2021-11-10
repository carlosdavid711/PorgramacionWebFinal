<?php

namespace Database\Factories;

use App\Models\Gestion_notas;
use Illuminate\Database\Eloquent\Factories\Factory;

class Gestion_notasFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Gestion_notas::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'Zona' => $this->faker->word,
        'Examen' => $this->faker->word,
        'final' => $this->faker->word,
        'created_at' => $this->faker->date('Y-m-d H:i:s'),
        'updated_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}
