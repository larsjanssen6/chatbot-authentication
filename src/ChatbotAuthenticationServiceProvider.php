<?php

namespace LarsJanssen\ChatbotAuthentication;

use Illuminate\Support\ServiceProvider;

class ChatbotAuthenticationServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     */
    public function boot()
    {
        $this->publishes([
            __DIR__.'/../config/chatbot-authentication.php' => config_path('chatbot-authentication.php'),
        ], 'config');

        $this->loadViewsFrom(__DIR__.'/../resources/views', 'views');

        $this->publishes([
            __DIR__.'/../resources/views' => resource_path('views/vendor/chatbot-authentication'),
        ]);
    }

    /**
     * Register the application services.
     */
    public function register()
    {
        $this->app->bind('chatbot-login', function () {
            return 'vendor.chatbot-authentication.login';
        });

        $routeConfig = [
            'namespace'  => 'LarsJanssen\ChatbotAuthentication\Controllers',
            'prefix'     => 'chatbot',
            'middleware' => [
                'web',
            ],
        ];

        $this->getRouter()->group($routeConfig, function ($router) {
            $router->get('login', [
                'uses'  => 'AuthenticationController@login',
                'as'    => 'authentication.login',
            ]);

            $router->post('test', [
                'uses' => 'AuthenticationController@response',
                'as'   => 'chatbot.test',
            ]);

            $router->post('welcome', [
                'uses' => 'AuthenticationController@welcome',
                'as'   => 'chatbot.test',
            ]);

            $router->get('css', [
                'uses' => 'AssetController@css',
                'as'   => 'chatbot.css',
            ]);

            $router->get('js', [
                'uses' => 'AssetController@js',
                'as'   => 'chatbot.js',
            ]);
        });
    }

    /**
     * Get the active router.
     *
     * @return Router
     */
    protected function getRouter()
    {
        return $this->app['router'];
    }
}
