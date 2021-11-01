<?php

namespace Database\Factories;

use App\Models\AppoimentTreatments;
use Illuminate\Database\Eloquent\Factories\Factory;

class AppoimentTreatmentsFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = AppoimentTreatments::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'amount' => $this->faker->numberBetween($min = 40, $max = 2000),
        ];
    }
}
