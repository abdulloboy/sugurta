<?php

namespace Database\Factories;

use App\Models\Mahsulot;
use Illuminate\Database\Eloquent\Factories\Factory;

class MahsulotFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Mahsulot::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'obyekt_id' => $this->faker->word,
        'Nom' => $this->faker->word,
        'yaratilgan_sana' => $this->faker->date('Y-m-d H:i:s'),
        'created_at' => $this->faker->date('Y-m-d H:i:s'),
        'updated_at' => $this->faker->date('Y-m-d H:i:s'),
        'deleted_at' => $this->faker->date('Y-m-d H:i:s'),
        'risk' => $this->faker->word,
        'oqibat' => $this->faker->word
        ];
    }
}
