<?php

declare(strict_types=1);

namespace App\Enums;

use Filament\Support\Contracts\HasColor;
use Filament\Support\Contracts\HasLabel;

enum Visibility: string implements HasLabel, HasColor
{
    case DRAFT = 'draft';
    case PUBLISHED = 'published';

    public function getLabel(): null|string
    {
        return $this->value;
    }

    public function getColor(): string|array|null
    {
        return match ($this) {
            self::DRAFT => 'primary',
            self::PUBLISHED => 'success',
        };
    }
}
