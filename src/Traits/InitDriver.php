<?php

namespace LarsJanssen\ChatbotAuthentication\Traits;

use BotMan\BotMan\BotManFactory;
use BotMan\BotMan\Drivers\DriverManager;
use BotMan\Drivers\Web\WebDriver;

trait InitDriver
{
    /**
     * @var
     */
    protected $botman;

    public function __construct()
    {
        $this->init();
    }

    /**
     * Init the web driver.
     */
    public function init()
    {
        $config = [
            'web' => [
                'matchingData' => [
                    'driver' => 'web',
                ],
            ],
        ];

        // Load the driver(s) you want to use
        DriverManager::loadDriver(WebDriver::class);

        // Create an instance
        $this->botman = BotManFactory::create($config);
    }
}
