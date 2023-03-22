<?php

namespace App\Filament\Resources\CustomerResource\Pages;

use App\Filament\Resources\CustomerResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\CreateRecord;
use Filament\Resources\Pages\CreateLeads;

class CreateCustomer extends CreateRecord
{
    protected static string $resource = CustomerResource::class;
}

