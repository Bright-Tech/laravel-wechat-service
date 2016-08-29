<?php
namespace bright_tech\laravel\wechat;

use bright_tech\wechat\Wechat;
use Illuminate\Support\Facades\Facade;


/**
 * Class WechatService
 * @package bright_tech\laravel\wechat
 *
 *
 */
class WechatServiceFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor() {
        return 'WechatService';
    }

}
