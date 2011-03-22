<?php
namespace app;

use glenn\controller\FrontController,
	glenn\http\Request,
    glenn\loader\Loader;

// module requires glenn module
if (!Loader::isRegistered('glenn')) {
	throw new \Exception('blah');
}

$request = new Request();
$router = new \glenn\router\RouterTree();
$frontController = new FrontController($router);
$response = $frontController->dispatch($request);
$response->send();