<?php

declare(strict_types=1);

namespace App\Enums;

enum Visibility: string
{
    case DRAFT = 'draft';
    case PUBLISHED = 'published';
}
