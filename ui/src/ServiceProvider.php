<?php

namespace AhmedAliraqi\Ui;

use AhmedAliraqi\Ui\Models\UiSection;
use Illuminate\Support\ServiceProvider as BaseServiceProvider;

class ServiceProvider extends BaseServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('ui', function () {
            return new UiBuilder();
        });

        $this->mergeConfigFrom(
            __DIR__.'/../config/ui.php', 'ui'
        );
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->app->singleton('ui.section', function () {
            return UiSection::all();
        });

        $this->publishes([
            __DIR__.'/../config/ui.php' => config_path('ui.php'),
        ], 'ui.config');

        $this->publishes([
            __DIR__.'/../database/migrations' => database_path('migrations'),
        ], 'ui.migration');
    }
}
