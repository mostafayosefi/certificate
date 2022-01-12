<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Http\View\Composser\Menuindex;

class MenuindexProvider extends ServiceProvider
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

        view()->composer([ 'admin.master', 'admin.layouts.sidebar' , 'index.layouts.header'  ,
        'index.layouts.navbarmob'  , 'index.layouts.footer'   , 'index.master'   , 'index.footer'   ], Menuindex::class);

        
       view()->composer([ 'admin.master', 'admin.layouts.sidebar'  ], Menuindex::class);

    }
}
