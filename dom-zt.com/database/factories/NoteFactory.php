<?php

namespace Database\Factories;

use App\Models\Note;
use Illuminate\Database\Eloquent\Factories\Factory;

class NoteFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Note::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'date_publish' => $this->faker->date('Y-m-d', strtotime('now +' . $this->faker->unique()->numberBetween(1, 31) . ' days')),
            'note_text' => $this->faker->paragraph,
            'obekt_id' => $this->faker->numberBetween(50,100),
            'user_id' => $this->faker->numberBetween(10,20),
        ];
    }
}
