<?php

namespace App\Providers;

use Illuminate\Cache\RateLimiting\Limit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        RateLimiter::for('login', function(Request $request) {
        // This helps our local testing to avoid throttling restrictions
        $attempts = (config('app.env') === 'local') ? 1000 : 5;

        return
            Limit::perMinute($attempts)->by($request->input('email'))
                ->response(function(Request $request, array $headers) {
                    return response()->json([
                        'status' => 'Request failed.',
                        'message' => 'Too many invalid attempts.  Please try again in a few minutes.',
                        'data' => [],
                    ], 200);
                });
            });
    }
}
