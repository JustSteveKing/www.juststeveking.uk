<?php

declare(strict_types=1);

namespace App\Enums;

use Filament\Support\Contracts\HasLabel;

enum Partner: string implements HasLabel
{
    case LARAVEL_NEWS = 'Laravel News';
    case PHP_ARCH = 'PHP Architect';

    public function getLabel(): null|string
    {
        return $this->value;
    }
}
