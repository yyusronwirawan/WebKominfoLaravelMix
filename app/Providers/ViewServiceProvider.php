<?php

namespace App\Providers;

use App\Models\Profile;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;

class ViewServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        View::composer(['layout.admin.sidebar', 'layout.dashboard.header'], function ($view) {
            $view->with('profiles', Profile::all());
        });
    }
}
