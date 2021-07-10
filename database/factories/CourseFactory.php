<?php

namespace Database\Factories;

use App\Models\Course;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str as Str;
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
        $title=$this->faker->name;
        $slug = Str::slug($title);
      
        return [
            'name' => $this->faker->name,
            'date' => $this->faker->date,
            'description' => $this->faker->text,
            'photo' => $this->faker->image,
            'price' => '24999',
            'duration' => $this->faker->time($format = 'H:i:s', $max = 'now'),
            'coupon'  => $this->faker->iso8601($max = 'now'),
            'slug'=>$slug,
            'category_id' => \App\Models\Category::all()->random()->id,
            'modality_id' => \App\Models\Modality::all()->random()->id,
        ];
    }
}
