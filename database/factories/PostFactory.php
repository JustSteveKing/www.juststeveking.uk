<?php

declare(strict_types=1);

namespace Database\Factories;

use App\Enums\Category;
use App\Enums\Partner;
use App\Enums\Visibility;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Arr;
use Illuminate\Support\Str;

final class PostFactory extends Factory
{
    protected $model = Post::class;

    public function definition(): array
    {
        $partner = $this->faker->boolean();

        return [
            'title' => $title = $this->faker->unique()->sentence(),
            'slug' => Str::slug($title),
            'description' => $this->faker->realText(maxNbChars: 160),
            'image' => $image = $this->faker->imageUrl(
                width: 1_200,
                height: 630,
                word: $this->faker->word(),
            ),
            'canonical_url' => $partner ? $this->faker->url() : null,
            'open_graph_image' => $image,
            'partner' => $partner ? Arr::random(Partner::cases()) : null,
            'category' => Category::ARTICLE,
            'visibility' => Visibility::PUBLISHED,
            'content' => $this->faker->realText(
                maxNbChars: 1_500,
                indexSize: 5,
            ),
            'user_id' => User::factory(),
        ];
    }
}
