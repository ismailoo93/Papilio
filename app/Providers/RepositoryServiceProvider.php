<?php

namespace App\Providers;


use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $models = array(
            'Affiliate',
        );

        foreach ($models as $model) {
            $this->app->bind("App\\Contracts\\{$model}RepositoryInterface", "App\\Repositories\\{$model}Repository");
        }
    }
}
