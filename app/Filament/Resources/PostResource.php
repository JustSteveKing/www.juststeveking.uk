<?php

declare(strict_types=1);

namespace App\Filament\Resources;

use App\Enums\Category;
use App\Enums\Partner;
use App\Enums\Visibility;
use App\Filament\Resources\PostResource\Pages;
use App\Models\Post;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Support\Facades\Auth;

final class PostResource extends Resource
{
    protected static null|string $model = Post::class;

    protected static null|string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('user_id')
                    ->relationship('user', 'name')
                    ->default(Auth::id())
                    ->required(),
                Forms\Components\TextInput::make('title')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('slug')
                    ->required()
                    ->maxLength(255)->unique()
                    ->unique(ignoreRecord: true),
                Forms\Components\Textarea::make('description')
                    ->required()
                    ->maxLength(160)
                    ->columnSpanFull()
                    ->rows(5),
                Forms\Components\FileUpload::make('image')
                    ->image(),
                Forms\Components\FileUpload::make('open_graph_image')
                    ->image(),
                Forms\Components\TextInput::make('canonical_url')
                    ->maxLength(255),
                Forms\Components\Select::make('partner')->options(Partner::class)
                    ->enum(Partner::class),
                Forms\Components\Select::make('category')->options(Category::class)
                    ->required()
                    ->enum(Category::class)
                    ->default(Category::ARTICLE),
                Forms\Components\Select::make('visibility')->options(Visibility::class)
                    ->required()
                    ->enum(Visibility::class)
                    ->default(Visibility::DRAFT),
                Forms\Components\MarkdownEditor::make('content')
                    ->required()
                    ->columnSpanFull(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('title')
                    ->searchable(),
                Tables\Columns\TextColumn::make('partner')
                    ->searchable(),
                Tables\Columns\TextColumn::make('category')
                    ->searchable(),
                Tables\Columns\TextColumn::make('visibility')
                    ->searchable(),
            ])
            ->filters([

            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [

        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListPosts::route('/'),
            'create' => Pages\CreatePost::route('/create'),
            'edit' => Pages\EditPost::route('/{record}/edit'),
        ];
    }
}
