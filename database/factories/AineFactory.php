<?php

namespace Database\Factories;

use App\Models\Aine;
use Illuminate\Database\Eloquent\Factories\Factory;

class AineFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Aine::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'prenom' => $this->faker->name,
            'nom' => $this->faker->name,
            'adresse_mail' => $this->faker->unique()->safeEmail,
            'num_telephone' => $this->faker->unique()->name,
        ];
    }
}
