<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use App\Models\user;
use Illuminate\Support\Facades\Gate;

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
        view::composer('admin.navbar', function($view){
            $userinfos = user::all();
            $view->with('userinfos',$userinfos);
        });

        gate::define('admin' ,function(user $user){
            return $user->usertype === 1 ;
        });

        gate::define('user' , function(user $user){
            return $user->usertype === 0 ;
        });

        gate::define('student' , function(user $user){
            return $user->usertype === 3 ;
        });
    }
}
