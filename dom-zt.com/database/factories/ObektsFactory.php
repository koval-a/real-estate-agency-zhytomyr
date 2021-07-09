<?php

namespace Database\Factories;

use App\Models\Model;
use App\Models\Obekts;
use Illuminate\Database\Eloquent\Factories\Factory;

class ObektsFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Obekts::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->text(30),
            'description' => $this->faker->paragraph,
            'price' => $this->faker->numberBetween(1000, 9999),
            'category_id' => $this->faker->numberBetween(1, 4),
            'location_rayon_id' => $this->faker->numberBetween(51, 75),
            'location_city_id' => $this->faker->numberBetween(3, 32),
            'location_city_rayon_id' => $this->faker->numberBetween(10, 33),
            'note' => $this->faker->paragraph,
            'address' => $this->faker->address,
            'square' => $this->faker->numberBetween(10, 200),
            'main_img' => $this->faker->image(public_path('/files/images/obekts/faker'),640,480, null, false),
            'isPublic' => $this->faker->numberBetween(0, 1),
            'count_room' => $this->faker->numberBetween(1, 20),
            'count_level' => $this->faker->numberBetween(1, 100),
            'level' => $this->faker->numberBetween(1, 100),
            'opalenyaName' => $this->faker->randomElement(['Автономне', 'Центральне']),
            'appointment_id' => $this->faker->numberBetween(17, 46),
            'rieltor_id' => 10,
            'slug' => $this->faker->slug,
            'owner_id' => $this->faker->numberBetween(11, 100),
            'isPay' => $this->faker->numberBetween(0, 1),
            'type_wall_id' => $this->faker->numberBetween(1, 8),
            'square_hause_land' => $this->faker->numberBetween(5, 100),
        ];
    }
}
