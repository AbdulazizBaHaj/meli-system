<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\WebsiteModels\CmsGeneral;
use Illuminate\Support\Facades\View; 

class FooterViewComposerServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        View::composer('*', function ($view) {
            $footerData = CmsGeneral::select(
                'footer_facebook',
                'footer_twitter',
                'footer_instagram',
                'footer_copyrights'
            )->first();

            $view->with('footerData', $footerData);
        });
    }
}
