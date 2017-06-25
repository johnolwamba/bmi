<?php
namespace John\BMI;
use Illuminate\Support\ServiceProvider;

class BMIServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        include __DIR__ . '/routes.php';
        $this->loadViewsFrom(__DIR__ . '/Views', 'bmi');
    }
    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {

        $this->app->singleton('bmi',function($app) {
          return new BMI;
        });
    }
}


//
//
//namespace Knox\AFT;
//use Illuminate\Support\ServiceProvider;
//class AFTServiceProvider extends ServiceProvider
//{
//    /**
//     * Bootstrap the application services.
//     *
//     * @return void
//     */
//    public function boot()
//    {
//        $this->publishes([
//            __DIR__.'/Config/aft.php' => config_path('aft.php'),
//        ], 'aft');
//    }
//    /**
//     * Register the application services.
//     *
//     * @return void
//     */
//    public function register()
//    {
//        $this->mergeConfigFrom( __DIR__.'/Config/aft.php', 'aft');
//        $this->app->singleton('aft', function($app) {
//            return new AFT;
//        });
//    }
//}