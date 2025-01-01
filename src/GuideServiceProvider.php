<?php

namespace Hiradrayan\Guide;

use Hiradrayan\Guide\View\Components\GuideButton;
use Hiradrayan\Guide\View\Components\GuideSidebar;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

class GuideServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadViewsFrom(__DIR__.'/../resources/views','guide');
        $this->loadMigrationsFrom(__DIR__.'/../database/migrations');
        $this->publishes([
            __DIR__.'/../public/assets' => public_path('vendor/hiradrayan/guide'),
        ],'guide');
        Blade::component(GuideButton::class, 'hiradrayan-guide-button' );
        Blade::component(GuideSidebar::class,'hiradrayan-guide-sidebar' );
    }
}
