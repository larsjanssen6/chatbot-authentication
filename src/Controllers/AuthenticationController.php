<?php

namespace LarsJanssen\ChatbotAuthentication\Controllers;

use BotMan\BotMan\BotMan;
use BotMan\BotMan\BotManFactory;
use Illuminate\Routing\Controller;
use BotMan\BotMan\Drivers\DriverManager;
use BotMan\Drivers\Web\WebDriver;

class AuthenticationController extends Controller
{
    /**
     *
     */
    public function login()
    {
        return view('views::login');
    }

    public function test()
    {
        $config = [
            'web' => [
                'matchingData' => [
                    'driver' => 'web',
                ],
            ]
        ];

        // Load the driver(s) you want to use
        DriverManager::loadDriver(WebDriver::class);

        // Create an instance
        $botman = BotManFactory::create($config);

        // Give the bot something to listen for.
        $botman->hears('hello', function (BotMan $bot) {
            $bot->reply('Hello yourself.');
        });

        // Start listening
        $botman->listen();
    }
}