<?php

namespace LarsJanssen\ChatbotAuthentication\Controllers;

use BotMan\BotMan\BotMan;
use Illuminate\Routing\Controller;
use LarsJanssen\ChatbotAuthentication\Traits\InitDriver;

class AuthenticationController extends Controller
{
    use InitDriver;

    /**
     * Show login form.
     */
    public function login()
    {
        return view('views::login');
    }

    /**
     * Return response based on given input.
     */
    public function response()
    {
        // Give the bot something to listen for.
        $this->botman->hears('hello', function (BotMan $bot) {
            $bot->reply('Hello yourself.');
        });

        // Start listening
        $this->botman->listen();
    }

    /**
     * Return welcome message based
     * on config file.
     */
    public function welcome()
    {
        $this->botman->hears('hi', function (BotMan $bot) {
            $bot->reply('welcome', ['hi there!']);
        });

        $this->botman->listen();
    }
}
