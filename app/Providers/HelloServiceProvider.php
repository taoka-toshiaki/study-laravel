<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;

use Illuminate\Support\Facades\Validator;

// use Illuminate\Validation\Validator;
use \App\Http\Validators\TaokaValidator;

class HelloServiceProvider extends ServiceProvider
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
        //
        //view::composer('hello.index','App\Http\mydir\HelloComposer');
        // $validator = $this->app['validator'];
        // $validator->resolver(function($translator,$data,$rules,$messages){
        //     return new TaokaValidator($translator,$data,$rules,$messages);
        // });
        Validator::extend('tt',function($attribute,$value,$parameters,$validator){
            return strcmp($value,'taoka')===0;
        });
    }
}
