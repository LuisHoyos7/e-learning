<?php

namespace Database\Factories;

use App\Models\WhisList;
use Illuminate\Database\Eloquent\Factories\Factory;

class WhisListFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = WhisList::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'description' => $this->faker->text,
            'course_id' => \App\Models\Course::all()->random()->id,
            'user_id' => \App\Models\user::all()->random()->id,
        ];
    }
}
