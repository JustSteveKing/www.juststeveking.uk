<?php

declare(strict_types=1);

namespace App\Enums;

use Filament\Support\Contracts\HasLabel;

enum Category: string implements HasLabel
{
    case TUTORIAL = 'tutorial';
    case ARTICLE = 'article';

    public function getLabel(): null|string
    {
        return $this->value;
    }
}
