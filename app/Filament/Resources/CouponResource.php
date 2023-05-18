<?php

namespace App\Filament\Resources;

use App\Filament\Resources\CouponResource\Pages;
use App\Filament\Resources\CouponResource\RelationManagers;
use Filament\Tables\Filters\Filter; 
use App\Models\Coupon;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\DatePicker;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class CouponResource extends Resource
{
    protected static ?string $model = Coupon::class;
    protected static ?string $recordTitleAttribute = 'coupon_code';


    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('coupon_code')
                ->required(),
               
                Forms\Components\TextInput::make('discount_%')
                ->required(),

                DatePicker::make('start_coupon')
                    ->minDate(now()->subYears(1)),
                 DatePicker::make('expired_coupon')
                    ->minDate(now()->subYears(1)),

                // Forms\Components\TextInput::make('default_discount%'),
                   
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('coupon_code')->toggleable(),
                Tables\Columns\TextColumn::make('discount_%')->toggleable(),
                Tables\Columns\TextColumn::make('start_coupon')->toggleable() ,
                Tables\Columns\TextColumn::make('expired_coupon')->toggleable() ,
                // Tables\Columns\TextColumn::make('default_discount')->toggleable() ,
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
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
            'index' => Pages\ListCoupons::route('/'),
            'create' => Pages\CreateCoupon::route('/create'),
            'edit' => Pages\EditCoupon::route('/{record}/edit'),
        ];
    }    
}
