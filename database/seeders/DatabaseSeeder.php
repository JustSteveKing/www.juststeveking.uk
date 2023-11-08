<?php

declare(strict_types=1);

namespace Database\Seeders;

use App\Enums\Partner;
use App\Enums\Visibility;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Seeder;

final class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $user = User::factory()->create([
            'name' => 'Steve McDougall',
            'role' => 'Developer Relations',
            'company' => 'Treblle',
            'avatar' => 'https://github.com/juststeveking.png',
            'email' => 'juststevemcd@gmail.com',
        ]);

        Post::factory()->for($user)->create([
            'title' => 'Test Post',
            'slug' => 'test-post',
            'partner' => Partner::PHP_ARCH,
            'visibility' => Visibility::PUBLISHED,
        ]);
    }
}
