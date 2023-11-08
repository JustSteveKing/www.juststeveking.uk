<?php

declare(strict_types=1);

namespace App\Models;

use App\Enums\Category;
use App\Enums\Partner;
use App\Enums\Visibility;
use Carbon\CarbonInterface;
use Illuminate\Database\Eloquent\Concerns\HasUlids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * @property string $id
 * @property string $title
 * @property string $slug
 * @property string $description
 * @property null|string $image
 * @property null|string $open_graph_image
 * @property null|Partner $partner
 * @property Category $category
 * @property Visibility $visibility
 * @property string $content
 * @property string $user_id
 * @property null|CarbonInterface $created_at
 * @property null|CarbonInterface $updated_at
 * @property User $user
 */
final class Post extends Model
{
    use HasFactory;
    use HasUlids;

    protected $fillable = [
        'title',
        'slug',
        'description',
        'image',
        'canonical_url',
        'open_graph_image',
        'partner',
        'category',
        'visibility',
        'content',
        'user_id',
    ];

    protected $casts = [
        'partner' => Partner::class,
        'category' => Category::class,
        'visibility' => Visibility::class,
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(
            related: User::class,
            foreignKey: 'user_id',
        );
    }
}
