<?php namespace Jonasva\LaravelWechat\Facades;

use Illuminate\Support\Facades\Facade;

class LaravelWechat extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'laravel-wechat';
    }
}
