<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Schema;
use App\Models\Setting;

class AppServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        //
    }

    public function boot(): void
    {
        if (Schema::hasTable('settings')) {
            View::share(
                'setting',
                Setting::first() ?? new Setting([
                    'company_name' => 'Admin Panel'
                ])
            );
        } else {
            View::share(
                'setting',
                new Setting([
                    'company_name' => 'Admin Panel'
                ])
            );
        }
    }
}