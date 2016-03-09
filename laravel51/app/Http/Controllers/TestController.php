<?php namespace App\Http\Controllers;

use Response;

class TestController extends Controller {

    public function index() {
        $time = round((microtime(true) - START) * 1000);
        $body = [
            'framework' => 'laravel',
            'duration' => $time . 'ms',
        ];
        return Response::json($body);
    }
}