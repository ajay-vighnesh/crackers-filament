<?php

// return new class extends SettingsMigration

use Spatie\LaravelSettings\Migrations\SettingsMigration;

class CreateGeneralSettings extends SettingsMigration
{
    public function up(): void
    {
        $this->migrator->add('general.global_discount', 50);
        $this->migrator->add('general.min_order_value', 2000);
    }
}