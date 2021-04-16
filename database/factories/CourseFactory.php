<?php

namespace Database\Factories;

use App\Models\Course;
use Illuminate\Database\Eloquent\Factories\Factory;
 
class CourseFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Course::class;

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
            'price' => $this->faker->randomFloat($nbMaxDecimals = NULL, $min = 0, $max = 100000),
            'duration' => $this->faker->time($format = 'H:i:s', $max = 'now'),
            'coupon'  => $this->faker->iso8601($max = 'now'),
            'category_id' => \App\Models\Category::all()->random()->id,
            'modality_id' => \App\Models\Modality::all()->random()->id,
        ];
    }
}
