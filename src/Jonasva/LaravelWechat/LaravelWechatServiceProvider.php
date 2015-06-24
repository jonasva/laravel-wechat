<?php namespace Jonasva\LaravelWechat;

use Illuminate\Support\ServiceProvider;

class LaravelWechatServiceProvider extends ServiceProvider
{

	/**
	 * Indicates if loading of the provider is deferred.
	 *
	 * @var bool
	 */
	protected $defer = true;

	/**
	 * Bootstrap the application events.
	 *
	 * @return void
	 */
	public function boot()
	{
		$this->package('jonasva/laravel-wechat', 'laravel-wechat');
	}

	/**
	 * Register the service provider.
	 *
	 * @return void
	 */
	public function register()
	{
		$this->app['laravel-wechat'] = $this->app->share(function($app)
		{
			return new LaravelWechat($app['config']);
		});
	}

	/**
	 * Get the services provided by the provider.
	 *
	 * @return array
	 */
	public function provides()
	{
		return array('laravel-wechat');
	}

}
