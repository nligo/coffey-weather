<?php
/**
 * Created by PhpStorm.
 * User: linpoo
 * Date: 2019/3/26
 * Time: 下午3:39
 */

namespace Coffey\Weather;


class ServiceProvider extends \Illuminate\Support\ServiceProvider
{

    /**
     * 服务引导方法
     *
     * @return void
     */
    public function boot(): void
    {
        $this->publishes([
            __DIR__.'/../config/coffey.php' => config_path('coffey.php'),
        ], 'config');
        $this->loadRoutesFrom(__DIR__.'/../routes/route.php');
        $this->loadMigrationsFrom(__DIR__.'/../migrations');
        $this->loadViewsFrom(__DIR__.'/../resources/views','coffey');
    }

    /**
     * 在容器中注册绑定。
     *
     * @return void
     */
    public function register()
    {
        $this->mergeConfigFrom(
            __DIR__.'/../config/coffey.php', 'coffey'
        );
    }


}