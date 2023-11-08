<?php

declare(strict_types=1);

namespace App\Enums;

enum Category: string
{
    case TUTORIAL = 'tutorial';
    case ARTICLE = 'article';
}
