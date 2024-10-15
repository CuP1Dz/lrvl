<?php

namespace Database\Factories;

use App\Models\Report;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Student>
 */
class ReportFactory extends Factory
{

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    protected $model = Report::class;

    public function definition(): array
    {
        return [
            'id' => fake()->Id(),
            'created_at' => fake()-> created_At(),
            'updated_at' => fake()-> updated_At(),
            'description'=> fake()->Description(),
            'number' => fake() -> Number()
        ];
    }
}