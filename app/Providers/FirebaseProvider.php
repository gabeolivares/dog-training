<?php

namespace App\Providers;

use Firebase\FirebaseLib;
use Illuminate\Support\ServiceProvider;

class FirebaseProvider extends ServiceProvider
{
    /**
     * Register bindings in the container.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(FirebaseLib::class, function ($app) {
            return new FirebaseLib(env('FIREBASE_DATABASE'), env('FIREBASE_DB_TOKEN'));
        });
    }
}
