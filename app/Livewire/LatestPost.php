<?php

declare(strict_types=1);

namespace App\Livewire;

use App\Models\Post;
use Illuminate\Contracts\View\View;
use Livewire\Component;

final class LatestPost extends Component
{
    public function render(): View
    {
        return view('livewire.latest-post', [
            'post' => Post::query()->with(['user'])->latest('updated_at')->first(),
        ]);
    }
}
