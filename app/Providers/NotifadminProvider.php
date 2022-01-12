<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Http\View\Composser\Notifadmin;

class NotifadminProvider extends ServiceProvider
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
 
        
       view()->composer([ 'admin.master', 'admin.layouts.sidebar' , 'admin.layouts.navbar'  ], Notifadmin::class);

    }
}
