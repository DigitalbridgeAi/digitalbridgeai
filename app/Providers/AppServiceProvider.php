<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\DB;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

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
        view()->composer('*', function($settings) {
            // $settings->with('seo', DB::table('seotools')->first());
            $settings->with('gs', DB::table('general_settings')->first());


            if (Session::has('currency')) {
                $data = DB::table('currencies')->find(Session::get('currency'));
                $settings->with('currency', $data);
            }
            else {
                $data = DB::table('currencies')->where('is_default','=',1)->first();
                $settings->with('currency', $data);
            }
        });
        Paginator::useBootstrap();

    }
}
