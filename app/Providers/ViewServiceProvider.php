<?php

namespace App\Providers;

use App\Models\Slider;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class ViewServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        View::composer('include.banner', function ($view) {
            $images = Slider::all();  
            $view->with('images', $images);  
        });
    }
}
