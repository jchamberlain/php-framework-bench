<?php namespace App\Http\Controllers;

use Illuminate\Http\Response;

class TestController extends Controller {

    public function index() {
        $time = round((microtime(true) - START) * 1000);
        $body = json_encode([
            'framework' => 'lumen',
            'duration' => $time . 'ms',
        ]);
        return (new Response($body, 200))->header('Content-Type', 'application/json');
    }
}