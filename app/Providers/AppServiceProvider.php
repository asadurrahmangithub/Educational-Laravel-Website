<?php

namespace App\Providers;

use App\Models\AccountSetting;
use App\Models\PageFooter;
use App\Models\PageHeader;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $pageHeader = PageHeader::first();
        $pageFooter = PageFooter::first();
        $accountImage = AccountSetting::first();
        View::share('pageHeader',$pageHeader);
        View::share('pageFooter',$pageFooter);
        View::share('accountImage',$accountImage);
    }
}
