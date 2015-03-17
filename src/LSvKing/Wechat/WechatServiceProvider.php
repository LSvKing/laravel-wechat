<?php

namespace LSvKing\Wechat;

use Illuminate\Support\ServiceProvider;
class WechatServiceProvider extends ServiceProvider {
  /**
   * Indicates if loading of the provider is deferred.
   *
   * @var bool
   */
  protected $defer = false;
  /**
   * Bootstrap the application events.
   *
   * @return void
   */
  public function boot()
  {
    $this->package('lsvking\wechat');
  }
  /**
   * Register the service provider.
   *
   * @return void
   */
  public function register()
  {
    $this->app->bind('wechat', 'LSvKing\Wechat\Wechat');
  }
  /**
   * Get the services provided by the provider.
   *
   * @return array
   */
  public function provides()
  {
    return array('wechat');
  }
}
