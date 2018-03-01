<?php

namespace LarsJanssen\ChatbotAuthentication\Controllers;

use Illuminate\Http\Response;
use Illuminate\Routing\Controller;

class AssetController extends Controller
{
    /**
     * Return compiled css output.
     *
     * @return Response
     */
    public function css()
    {
        $content = file_get_contents(__DIR__.'/../../output/main.css');
        $response = new Response(
            $content, 200, [
                'Content-Type' => 'text/css',
            ]
        );

        return $response;
    }

    /**
     * Return compiled css output.
     *
     * @return Response
     */
    public function js()
    {
        $content = file_get_contents(__DIR__.'/../../output/app.js');
        $response = new Response(
            $content, 200, [
                'Content-Type' => 'text/javascript',
            ]
        );

        return $response;
    }
}