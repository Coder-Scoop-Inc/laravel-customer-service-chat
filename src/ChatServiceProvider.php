<?php

namespace Coderscoop\Chat;

use Illuminate\Support\ServiceProvider;

/**
 * Description of ChatServiceProvider
 *
 * @author tesa
 */
class ChatServiceProvider extends ServiceProvider
{
    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = true;
    
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
    
    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {        
        $this->setPackageConfigurationFile();
        $this->bindChat();
    }
    
    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return [];
    }
    
    /**
     * Set package config file
     */
    protected function setPackageConfigurationFile()
    {
        $config = __DIR__ . '/Config/config.php';
        $path = config_path('config.php');
        
        $this->publishes([$config => $path], 'config');        
        $this->mergeConfigFrom( $config, 'condig');
    }
    /**
     * Bind the package to Laravel
     */
    protected function bindChat()
    {
        $this->app->bind('chat', function() {
            return new Chat();
        });
    }
}
