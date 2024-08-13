<?php

namespace App\Filament\Resources;

use App\Filament\Resources\HighlightCategoryResource\Pages;
use App\Filament\Resources\HighlightCategoryResource\RelationManagers;
use App\Models\HighlightCategory;
use Filament\Forms;
use Filament\Forms\Components\Select;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class HighlightCategoryResource extends Resource
{
    protected static ?string $model = HighlightCategory::class;

    protected static ?string $navigationIcon = 'heroicon-m-squares-plus';
    protected static ?string $navigationLabel = 'Онцлох Нийтлэлийн төрөл';
    protected static ?int $navigationSort = 3;


    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('name')
                    ->required()
                    ->maxLength(255)
                    ->label('Төрөлийн нэр Монгол'),
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
                    ->label('Төлөв'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')
                    ->searchable()
                    ->label('Төрөлийн нэр Монгол'),
                Tables\Columns\TextColumn::make('japanese')
                    ->searchable()
                    ->label('Төрөлийн нэр Япон'),
                Tables\Columns\TextColumn::make('flag')
                    ->searchable()
                    ->label('Төлөв'),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
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
            'index' => Pages\ListHighlightCategories::route('/'),
            'create' => Pages\CreateHighlightCategory::route('/create'),
            'edit' => Pages\EditHighlightCategory::route('/{record}/edit'),
        ];
    }
}