<?php

namespace Database\Factories;

use App\Models\Maestros;
use Illuminate\Database\Eloquent\Factories\Factory;

class MaestrosFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Maestros::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'Carnet' => $this->faker->word,
        'Nombre_Completo' => $this->faker->word,
        'Fecha_Nacimiento' => $this->faker->word,
        'edad' => $this->faker->word,
        'created_at' => $this->faker->date('Y-m-d H:i:s'),
        'updated_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}
