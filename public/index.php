<?php

use DI\Bridge\Slim\Bridge;
use DI\Container;
use My\App\Controller\HomeController;
use Slim\Factory\AppFactory;
use Slim\Views\Twig;
use Slim\Views\TwigMiddleware;

require '../vendor/autoload.php';

$container = new Container();

// Create App
//$app = Bridge::create($container);
$app = AppFactory::createFromContainer($container);

// Create Twig
$twig = Twig::create('../views', ['cache' => false]);

// Add Twig-View Middleware
$app->add(TwigMiddleware::create($app, $twig));

$app->get('/', [HomeController::class, 'index']);
//$app->get('/', [\My\App\Controller\TestController::class, 'index']);



$app->run();