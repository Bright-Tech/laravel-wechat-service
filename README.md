# Laravel Wechat Service
Laravel 专用微信SDK服务

##安装

推荐使用 [composer](http://getcomposer.org/download/) 进行安装.

你可以运行以下命令

```
php composer.phar require bright-tech/laravel-wechat-service
```

或向你的 `composer.json` 文件的 `require` 项中增加

```
"bright-tech/laravel-wechat-service": "*"
```

接下来,执行

```
php artisan vendor:publish
```
将 `wechat.php` 文件部署到config文件夹下。

之后需要将 `WechatServiceProvider` 加入 `config\app.php` 的 `providers` 中

```php
'providers' => [
    ...
    bright_tech\laravel\wechat\WechatServiceProvider::class,
]
```

最后增加 alias

```php
'aliases' => [
    ...
    'Wechat' => bright_tech\laravel\wechat\WechatServiceFacade::class,
]
```



##使用


```php


```