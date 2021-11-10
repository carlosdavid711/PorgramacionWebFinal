<?php

namespace Database\Factories;

use App\Models\Padres;
use Illuminate\Database\Eloquent\Factories\Factory;

class PadresFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Padres::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'Usuario_Padre' => $this->faker->word,
        'Nombre_Completo' => $this->faker->word,
        'Telefono' => $this->faker->word,
        'Correo_eletronico' => $this->faker->word,
        'created_at' => $this->faker->date('Y-m-d H:i:s'),
        'updated_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}
