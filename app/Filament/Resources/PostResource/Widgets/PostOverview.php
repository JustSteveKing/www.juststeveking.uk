<?php

namespace App\Filament\Resources\PostResource\Widgets;

use App\Enums\Visibility;
use App\Models\Post;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class PostOverview extends BaseWidget
{
    public Visibility $visibility;

    protected function getStats(): array
    {
        return [
            Stat::make('Published Posts', Post::query()->where('visibility', $this->visibility)->count()),
        ];
    }
}
