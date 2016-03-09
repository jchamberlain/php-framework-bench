<?php

use Psr\Http\Message\ServerRequestInterface;
use Psr\Http\Message\ResponseInterface;

class TestController {

    public function index(ServerRequestInterface $request, ResponseInterface $response, array $args) {
        $time = round((microtime(true) - START) * 1000);
        $body = json_encode([
            'framework' => 'slim',
            'duration' => $time . 'ms',
        ]);
        $response = $response->withHeader('Content-Type', 'application/json');
        $response->getBody()->write($body);
        return $response;
    }
}