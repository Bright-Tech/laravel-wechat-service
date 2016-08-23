<?php
namespace bright_tech\laravel\wechat;

use bright_tech\wechat\Wechat;
use Illuminate\Support\ServiceProvider;


class WechatServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
        $this->publishes([
            __DIR__ . '/config/wechat.php' => config_path('wechat.php'),
        ]);
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(Wechat::class, function ($app) {
            $configWechat = config('wechat');
            return new Wechat($configWechat['appid'], $configWechat['secret']);
        });
    }
}
