<?php

namespace App\Providers;

use Illuminate\Cache\RateLimiting\Limit;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\Facades\Route;

class RouteServiceProvider extends ServiceProvider
{

    public const HOME = '/home';

    public function boot()
    {
        $this->configureRateLimiting();

        $this->routes(function () {
            $this->mapApiRoutes();
            Route::middleware('web')
                ->namespace($this->namespace)
                ->group(base_path('routes/web.php'));
        });
    }

    protected function mapApiRoutes() {
        // Route::get('', function () {
        //     return 'Backend with laravel , 2021';
        // });
        // $version= 'v1';
        // Route::prefix('api/'. $version.'/public')
        // ->middleware('api')
        // ->group(base_path('routes/api/public.php'));

        // Route::prefix('api/'. $version.'/private')
        // ->middleware('api')
        // ->group(base_path('routes/api/private.php'));

        // Route::prefix('api/'. $version.'/authentication')
        // ->middleware('api')
        // ->group(base_path('routes/api/authentication.php'));

        $version = 'v1';
        Route::prefix("api/${version}")
            ->middleware('api')
            ->group(base_path("routes/api/${version}/public.php"));

        Route::prefix("api/${version}")
            ->middleware('api')
            ->group(base_path("routes/api/${version}/private.php"));
    }

    /**Route
     * Configure the rate limiters for the application.
     *
     * @return void
     */
    protected function configureRateLimiting()
    {
        RateLimiter::for('api', function (Request $request) {
            return Limit::perMinute(60)->by(optional($request->user())->id ?: $request->ip());
        });
    }
}
