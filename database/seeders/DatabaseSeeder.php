<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Str;
use App\Models\Orderstatus;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        $admin_role = Role::create(['name' => 'admin']);

        $admin = \App\Models\User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
            'remember_token' => Str::random(10),
        ]);
        $admin->assignRole($admin_role);

        
        \App\Models\Orderstatus::create([
            'orderstatus' => 'waiting',
        ]);
        
        \App\Models\Orderstatus::create([
            'orderstatus' => 'delivered',
        ]);

        \App\Models\Orderstatus::create([
            'orderstatus' => 'cancel',
        ]);

    }
}
