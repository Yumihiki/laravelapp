<?php

namespace App\Providers;

use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;
// use Illuminate\Validation\Balidator; 
use App\Http\Validators\HelloValidator;
use Illuminate\Support\Facades\Validator;


class HelloServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        /*
        $validator = $this->app['validator'];
        $validator->resolver(function($translator, $data, $rules, $messages)
        {
            return new HelloValidator($translator, $data, $rules, $messages);
        });
        */

        
            Validator::extend('hello', function($attribute, $value, $parameters, $validator) {
            return $value % 2 == 0;
        });
        
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
