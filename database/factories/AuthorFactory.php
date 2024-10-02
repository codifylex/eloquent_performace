<?php

namespace Database\Factories;

use App\Models\Author;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Author>
 */
class AuthorFactory extends Factory
{
    protected $model = Author::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->name,                // Gera um nome aleatório
            'bio' => $this->faker->paragraph(3),         // Gera uma biografia com 3 parágrafos
            'avatar' => $this->faker->imageUrl(640, 480, 'people'), // Gera uma URL de imagem aleatória
        ];
    }
}
