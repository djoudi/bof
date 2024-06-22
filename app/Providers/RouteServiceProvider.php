<?php

namespace App\Providers;

use Illuminate\Cache\RateLimiting\Limit;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\Facades\Route;

class RouteServiceProvider extends ServiceProvider
{
    /**
     * The path to your application's "home" route.
     *
     * Typically, users are redirected here after authentication.
     *
     * @var string
     */
    public const HOME = '/';

    public const HOME_USER = 'user/home';

    public const HOME_ADMIN = 'admin/home/';

    protected $namespaceApi = 'App\Http\Controllers\Api';

    protected $namespace = 'App\Http\Controllers';

    protected $namespaceAdmin = 'App\Http\Controllers\Admin';

    protected $namespaceUser = 'App\Http\Controllers\User';

    /**
     * Define your route model bindings, pattern filters, and other route configuration.
     */
    public function boot(): void
    {
        RateLimiter::for('api', function (Request $request) {
            return Limit::perMinute(60)->by($request->user()?->id ?: $request->ip());
        });

        $this->routes(function () {
            Route::middleware('api')
                ->prefix('api')
                ->namespace($this->namespaceApi)
                ->group(base_path('routes/api.php'));

            Route::middleware('web')
                ->namespace($this->namespace)
                ->group(base_path('routes/web.php'));

            Route::middleware('web')
                ->prefix('user')
                ->namespace($this->namespaceUser)
                ->group(base_path('routes/user.php'));

            Route::middleware('web')
                ->prefix('admin')
                ->namespace($this->namespaceAdmin)
                ->group(base_path('routes/admin.php'));

        });
    }
}
