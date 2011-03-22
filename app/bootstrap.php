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

//$params = array($request);


//$frontController = new FrontController($router);

$frontController = new \ReflectionClass('\glenn\http\Request');
$frontController = $frontController->newInstanceArgs(array($router));

//print_r($frontController);

//exit;

//$frontController = new FrontController($router);

//exit;

$response = $frontController->dispatch($request);
$response->send();