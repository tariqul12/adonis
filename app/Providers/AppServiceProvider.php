<?php

namespace App\Providers;

use App\Models\Category;
use App\Models\Company;
use App\Models\Slider;
use Illuminate\Support\ServiceProvider;
use View;

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
        //only add above- use View, Here website.master is view directory of resources
        View::composer(["*"], function ($view) {
            $view->with('categories', Category::whereStatus(1)->latest()->get());
            $view->with('companyInfo', Company::latest()->first());
            $view->with('pageTitleBanner', Slider::where(['status' => 1, 'banner_type' => 4])->orderBy('id', 'desc')->first());

        });
    }
}
