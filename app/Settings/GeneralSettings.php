<?php

namespace App\Settings;

use Spatie\LaravelSettings\Settings;

class GeneralSettings extends Settings
{
    public int $global_discount;
    
    public int $min_order_value;
    
    public static function group(): string
    {
        return 'general';
    }


}