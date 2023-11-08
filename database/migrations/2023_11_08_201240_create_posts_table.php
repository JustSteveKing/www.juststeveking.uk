<?php

declare(strict_types=1);

use App\Enums\Category;
use App\Enums\Visibility;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('posts', static function (Blueprint $table): void {
            $table->ulid('id')->primary();

            $table->string('title');
            $table->string('slug')->unique();
            $table->string('description', 160);
            $table->string('image')->nullable();
            $table->string('canonical_url')->nullable();
            $table->string('open_graph_image')->nullable();
            $table->string('partner')->nullable();
            $table->string('category')->default(Category::ARTICLE->value);
            $table->string('visibility')->default(Visibility::DRAFT->value);

            $table->text('content');

            $table
                ->foreignUlid('user_id')
                ->index()
                ->constrained()
                ->cascadeOnDelete();

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('posts');
    }
};
