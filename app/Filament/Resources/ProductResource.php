<?php

namespace App\Filament\Resources;

use App\Filament\Resources\CategoryResource\Pages\ListCategories;
use App\Filament\Resources\ProductResource\Pages;
use App\Filament\Resources\categories;
use App\Filament\Resources\CategoryResource;
use App\Filament\Resources\ProductResource\Widgets\ProductStatsOverview;
use App\Models\Category;
use App\Models\Product;
use Closure;
use AlperenErsoy\FilamentExport\Actions\FilamentExportBulkAction;
use AlperenErsoy\FilamentExport\Actions\FilamentExportHeaderAction;
use Illuminate\Support\Str;
use Filament\Forms;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\RichEditor;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\MultiSelect;
use Filament\Tables;
use Filament\Tables\Columns\ToggleColumn;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Tables\Filters\Filter;
//
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Card;

//

class ProductResource extends Resource
{
    protected static ?string $model = Product::class;
    protected static ?string $recordTitleAttribute = 'name';


    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form->columns(1)
            ->schema([
                Forms\Components\TextInput::make('name')
                    ->required()
                    ->maxLength(255)
                    ->reactive()
                    ->afterStateUpdated(function (Closure $set, $state) {
                        $set('url_slug', str::slug($state));
                    }),
                Forms\Components\TextInput::make('url_slug')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('seo_title')
                    ->required()
                    ->maxLength(255),
                // Forms\Components\TextInput::make('description')
                // ->required()
                // ->maxLength(255),
                RichEditor::make('description')
                    ->required(),

                Select::make('category_id')
                    ->label('category')
                    ->relationship('category', 'category')
                    ->required()
                    ->preload()
                    ->searchable(),

                Forms\Components\TextInput::make('price')
                    ->required()
                    ->maxLength(255),

                FileUpload::make('image')->image()
                    ->required(),

            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('image')->toggleable(),
                Tables\Columns\TextColumn::make('name')
                ->sortable()
                ->toggleable(),
                Tables\Columns\TextColumn::make('url_slug')->toggleable(),
                Tables\Columns\TextColumn::make('seo_title')->toggleable(),
                Tables\Columns\TextColumn::make('description')->toggleable(),
                Tables\Columns\TextColumn::make('category.category')->toggleable(),
                Tables\Columns\TextColumn::make('price')->toggleable(),

            ])
            ->filters([
                // Filter::make('is_featured')
                //     ->query(fn(Builder $query): Builder => $query->where('is_featured', true))
                // Filter::make('name')->label('name')
                
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
                FilamentExportBulkAction::make('export')
            ]);
    }


    
    protected function getTableHeaderActions(): array
{
    return [
        FilamentExportHeaderAction::make('Export'),
    ];
}

    protected function getTableBulkActions(): array
{
    return [
        FilamentExportBulkAction::make('Export'),
    ];
}
  


    public static function getWidgets(): array
    {
        return [
            ProductStatsOverview::class,
        ];
    }


    public static function getPages(): array
    {
        return [
            'index' => Pages\ListProducts::route('/'),
            'create' => Pages\CreateProduct::route('/create'),
            'edit' => Pages\EditProduct::route('/{record}/edit'),
        ];
    }



}