<?php

declare(strict_types=1);

namespace App\Livewire;

use App\Enums\Visibility;
use App\Models\Post;
use Illuminate\Contracts\View\View;
use Livewire\Component;

final class LatestPosts extends Component
{
    public function render(): View
    {
        return view('livewire.latest-posts', [
            'posts' => Post::query()->with(['user'])->where('visibility', Visibility::PUBLISHED)->limit(3)->latest('updated_at')->get(),
        ]);
    }
}
