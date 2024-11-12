<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ArticleResource\Pages;
use App\Filament\Resources\ArticleResource\RelationManagers;
use App\Models\Article;
use App\Models\ArticleCategory;
use Filament\Forms;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Select;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ArticleResource extends Resource
{
    protected static ?string $model = Article::class;

    protected static ?string $navigationIcon = 'heroicon-s-book-open';
    protected static ?string $navigationLabel = 'Нийтлэл';
    protected static ?int $navigationSort = 2;


    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Select::make('category_id')
                ->label('Төрөл сонгох')
                ->options(ArticleCategory::all()->pluck('name','id'))
                ->searchable(),
                Forms\Components\TextInput::make('title_mn')
                    ->maxLength(255)
                    ->label('Монгол гарчиг'),
                Forms\Components\TextInput::make('title_jp')
                    ->maxLength(255)
                    ->label('Япон гарчиг'),
                RichEditor::make('article')
                ->label('Нийтлэл Монгол'),
                RichEditor::make('japanese')
                ->label('Нийтлэл Япон'),
                Forms\Components\FileUpload::make('image')
                    ->image()
                    ->label('Зураг')
                    ->imageCropAspectRatio('1:1')
                    ->imageResizeTargetWidth('800')
                    ->imageResizeTargetHeight('600')
                    ->imageEditor()
                    ->disk('public'),
                Select::make('flag')
                    ->options([
                        '1' => 'Идвэхтэй',
                        '0' => 'Идвэхгүй',
                    ])
                    ->default('1')
                    ->label('Төлөв'),
                Forms\Components\TextInput::make('writer')
                    ->maxLength(255)
                    ->label('Зохиолч')
                    ->default('Админ'),
    
            ])
            ->columns(1);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('views')
                    ->searchable()
                    ->label('Үзсэн'),
                Tables\Columns\TextColumn::make('articleCategory.name')
                    ->searchable()
                    ->label('Төрөл'),
                Tables\Columns\TextColumn::make('title_mn')
                    ->searchable()
                    ->label('Монгол гарчиг'),
                Tables\Columns\TextColumn::make('title_jp')
                    ->searchable()
                    ->label('Япон гарчиг'),
                Tables\Columns\TextColumn::make('flag')
                    ->badge()
                    ->color(fn (string $state): string => match ($state) {
                        '1' => 'success',
                        '2' => 'warning',
                        default => 'gray',  
                    })
                ->formatStateUsing(fn (string $state): string => match ($state) {
                    '1' => 'Нийтлэгдсэн',
                    '2' => 'Хүсэлт ирсэн', // 必要に応じて他の値のテキストも設定可能
                    default => $state, // デフォルトはそのままの値を表示
                })
                    ->searchable()
                    ->label('Төлөв'),
                Tables\Columns\TextColumn::make('writer')
                    ->searchable()
                    ->label('Зохиолч'),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->defaultSort('created_at', 'desc')
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make()
                ->label('Засах'),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make()
                    ->label('Бүгдийг устгах'),
                ])
                ->label('Бүгдийг сонгох'),
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
            'index' => Pages\ListArticles::route('/'),
            'create' => Pages\CreateArticle::route('/create'),
            'edit' => Pages\EditArticle::route('/{record}/edit'),
        ];
    }
}