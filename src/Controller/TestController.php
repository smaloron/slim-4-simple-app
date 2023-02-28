<?php

namespace My\App\Controller;

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;

class TestController
{

    public function index(Request $request, Response $response){
        $response->getBody()->write("Hello");
        return $response;
    }

}