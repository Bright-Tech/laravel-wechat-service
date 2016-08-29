<?php
namespace bright_tech\laravel\wechat;


use Illuminate\Support\ServiceProvider;
use Cache;

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
        $this->app->singleton(WechatService::class, function ($app) {
            $configWechat = config('wechat');
            return new WechatService($configWechat['appid'], $configWechat['secret'], Cache);
        });
    }
}
