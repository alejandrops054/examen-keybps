<?php

namespace Database\Factories;

use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends Factory<Post>
 */
class PostFactory extends Factory
{
    protected $model = Post::class;

    public function definition(): array
    {
        $title = $this->faker->sentence();

        return [
            'titulo' => $title,
            'slug' => Str::slug($title),
            'contenido' => $this->faker->paragraph(),
            'estatus_publicacion' => $this->faker->randomElement(['draft', 'published']),
            'fecha_publicacion' => $this->faker->dateTimeBetween('-1 month', 'now'),
            'user_id' => User::factory(),
        ];
    }
}
