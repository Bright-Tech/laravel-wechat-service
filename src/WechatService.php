<?php
namespace bright_tech\laravel\wechat;

use bright_tech\wechat\Wechat;


/**
 * Class WechatService
 * @package bright_tech\laravel\wechat
 *
 *
 */
class WechatService
{
    protected $wechat;
    /**
     *
     * @var string
     */
    protected $appid = '';

    /**
     *
     * @var string
     */
    protected $secret = '';

    protected $cache;


    /**
     * WechatService constructor.
     * @param string $appid
     * @param string $secret
     * @param \Illuminate\Contracts\Cache\Repository $cache
     */
    public function __construct($appid, $secret, \Illuminate\Contracts\Cache\Repository $cache)
    {
        $this->appid = $appid;
        $this->secret = $secret;
        $this->cache = $cache;
    }


    public function getAccessToken()
    {
        $cache = $this->cache;

        if (!$cache->has('Wechat_AccessToken')) {
            $result = $this->getWechatClient()->getAccessToken();
            $cache->put('Wechat_AccessToken', $result->accessToken, time() + $result->expiresIn/60 - 5);
        }

        return $cache->get('Wechat_AccessToken');
    }

    /**
     * @return Wechat
     */
    public function getWechatClient()
    {
        if (!$this->wechat) {
            $this->wechat = new Wechat($this->appid, $this->secret);
        }
        return $this->wechat;
    }


}
