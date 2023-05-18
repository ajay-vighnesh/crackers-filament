<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PaymentResource\Pages;
use App\Filament\Resources\PaymentResource\RelationManagers;
use App\Models\Payment;
use App\Models\Customer;
use App\Models\Paymentmethod;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Forms\Components\Select;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use AlperenErsoy\FilamentExport\Actions\FilamentExportBulkAction;
use AlperenErsoy\FilamentExport\Actions\FilamentExportHeaderAction;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class PaymentResource extends Resource
{
    protected static ?string $model = Payment::class;

    protected static ?string $navigationIcon = 'heroicon-o-credit-card';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                // Forms\Components\TextInput::make('customer_name')
                // ->required()
                // ->maxLength(255),
                Select::make('customer')
                    ->label('Customer')
                    ->options(Customer::all()->pluck('name', 'name'))
                    ->required()
                    ->searchable(),
                // Forms\Components\TextInput::make('payment_method')
                // ->required()
                // ->maxLength(255),

                // Select::make('paymentmethod')
                //         ->label('payment method')
                //         ->relationship('name', 'paymentmethod')
                //         ->preload()
                //         ->searchable(),
                
                // Select::make('paymentmethod')
                //     ->label('Payment method')
                //     ->options(Paymentmethod::all()->pluck('name', 'paymentmethod'))
                //     ->searchable(),

                Forms\Components\TextInput::make('order_summery')
                ->required()
                ->maxLength(255),
                Forms\Components\TextInput::make('coupon')
                ->maxLength(255),
                Forms\Components\TextInput::make('total')
                ->required()
                ->maxLength(255),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('customer')->toggleable(),
                // Tables\Columns\TextColumn::make('paymentmethod'),
                Tables\Columns\TextColumn::make('order_summery')->toggleable(),
                Tables\Columns\TextColumn::make('coupon')->toggleable(),
                Tables\Columns\TextColumn::make('total')->toggleable(),
            ])
            ->filters([
                //
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
    
    public static function getRelations(): array
    {
        return [
            //
        ];
    }
    
    public static function getPages(): array
    {
        return [
            'index' => Pages\ListPayments::route('/'),
            'create' => Pages\CreatePayment::route('/create'),
            'edit' => Pages\EditPayment::route('/{record}/edit'),
        ];
    }    
}
