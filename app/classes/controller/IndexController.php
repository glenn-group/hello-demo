<?php
namespace app\controller;

use glenn\controller\Controller,
	glenn\http\Request,
	glenn\http\Response;

class IndexController extends Controller
{
	protected $afterFilters = array('afterFilter1', 'afterFilter2');
	
	protected $beforeFilters = array('beforeFilter1', 'beforeFilter2');
	
	protected function beforeFilter1(Request $request)
	{
		echo 'beforeFilter1<br>';
	}
	
	protected function beforeFilter2(Request $request)
	{
		echo 'beforeFilter2<br>';
	}
	
    public function indexAction()
    {
		return new Response('methodResponse');
    }
	
	protected function afterFilter1(Response $response)
	{
		echo 'afterFilter1 received response: ' . $response->body() . '<br>';
		return new Response('afterFilter1Response');
	}
	
	protected function afterFilter2(Response $response)
	{
		echo 'afterFilter2 received response: ' . $response->body() . '<br>';
		echo 'response sent to client:<br>';
		return new Response('afterFilter2Response');
	}
}