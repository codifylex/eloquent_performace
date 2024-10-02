<?php

namespace Database\Factories;

use App\Models\Author;
use App\Models\Post;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    protected $model = Post::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'author_id' => Author::factory(), // Gera um autor automaticamente
            'title' => $this->faker->sentence(6), // Gera um título de 6 palavras
            'content' => $this->faker->paragraph(5), // Gera um conteúdo com 5 parágrafos
            'cover' => $this->faker->imageUrl(640, 480, 'abstract'), // Gera uma URL de imagem aleatória
        ];
    }
}
