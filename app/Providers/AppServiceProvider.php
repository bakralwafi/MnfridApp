<?php

namespace App\Providers;
use App\Models\Settingwebsite;
use App\Models\Services;
use App\Models\workwith;
use App\Models\Portfolio;
use App\Models\indexpage;
use App\Models\portfolio_detials;
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
        $settings = Settingwebsite::checkSettings();
        $services= Services::checkServices();

        $workwiths=workwith::checkworkwith();
        $portfolios=Portfolio::checkprotfolio();
        $indexpage=indexpage::checkSettingsIndexpage();
        //

        View()->share(['setting'=>$settings,
        'service'=>$services,

        'workwith'=>$workwiths,
        'portfolio'=>$portfolios,
        'indexpage'=>$indexpage,
        ]);
    }
}
