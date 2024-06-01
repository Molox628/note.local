<?php

namespace App\Providers;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;

class RouteServiceProvider extends ServiceProvider
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
    public function boot()
    {



            Route::middleware('web')
                ->group(base_path('routes/web.php'));

            Route::prefix('api')->middleware('api')
                ->group(base_path('routes/api.php'));

            // Подключение нового файла с маршрутами



    }
}


