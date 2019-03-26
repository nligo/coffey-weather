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
    protected $defer = true;

    /**
     * 服务引导方法
     *
     * @return void
     */
    public function boot(): void
    {
        //发布配置文件到项目的 config 目录中
        $this->publishes([
            __DIR__ . '/config/coffey.php' => config_path('coffey.php'),
        ]);
        $this->loadRoutesFrom(__DIR__.'/routes.php');

        $this->loadMigrationsFrom(__DIR__.'/migrations');

        $this->loadViewsFrom(__DIR__.'/resources/views');


    }

    /**
     * 在容器中注册绑定。
     *
     * @return void
     */
    public function register()
    {
        $this->mergeConfigFrom(
            __DIR__.'/config/coffey.php', 'coffey'
        );
    }


}