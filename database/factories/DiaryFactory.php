<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Crypt;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Diary>
 */
class DiaryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'judul' =>fake()->name(),
            'diary' => Crypt::encryptString('andaa'),
            'mood'=> fake()->randomElement(['Marah','Sedih','Senang','Capek','Stress','Cinta']),
        ];
    }
}
