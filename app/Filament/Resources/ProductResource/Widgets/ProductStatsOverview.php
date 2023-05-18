<?php

namespace App\Filament\Resources\ProductResource\Widgets;

use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Card;
use App\Models\Product;

class ProductStatsOverview extends BaseWidget
{
    protected function getCards(): array
    {
        return [
            Card::make('Product',Product::count()),
        ];
    }
}
