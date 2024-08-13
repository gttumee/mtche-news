<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ArticleCategoryResource\Pages;
use App\Filament\Resources\ArticleCategoryResource\RelationManagers;
use App\Models\ArticleCategory;
use Filament\Forms;
use Filament\Forms\Components\Select;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class ArticleCategoryResource extends Resource
{
    protected static ?string $model = ArticleCategory::class;

    protected static ?string $navigationIcon = 'heroicon-m-squares-plus';
    protected static ?string $navigationLabel = 'Нийтлэлийн төрөл';
    protected static ?int $navigationSort = 1;

    public static function form(Form $form): Form
    {
        return $form
        ->schema([
            Forms\Components\TextInput::make('name')
                ->required()
                ->maxLength(255)
                ->label('Төрөлийн нэр'),
            Forms\Components\TextInput::make('japanese')
                ->required()
                ->maxLength(255)
                ->label('Төрөлийн нэр япон'),
                Select::make('flag')
                ->options([
                    '1' => 'Идвэхтэй',
                    '0' => 'Идвэхгүй',
                ])
                ->default('1')
                ->label('Төлөв')

        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')
                    ->searchable()
                    ->label('Төрөлийн нэр'),
                Tables\Columns\TextColumn::make('japanese')
                    ->searchable()
                    ->label('Япон'),
                Tables\Columns\TextColumn::make('flag')
                    ->searchable()
                    ->label('Идэвхтэй'),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make()
                ->label('Засах'),
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
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListArticleCategories::route('/'),
            'create' => Pages\CreateArticleCategory::route('/create'),
            'edit' => Pages\EditArticleCategory::route('/{record}/edit'),
        ];
    }
}