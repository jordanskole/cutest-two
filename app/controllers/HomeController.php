<?php

class HomeController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	public function index()
	{
		return View::make('home.index');
	}

	public function full()
	{
		return View::make('home.full');
	}

	public function bootstrap()
	{
		return View::make('home.bootstrap')
			->with('title', 'Bootstrap Test Theme');
	}

	public function twilli()
	{
		return View::make('twilli.index')
			->with('title', 'Twilli Theme');
	}

	public function garis()
	{
		return View::make('garis.index')
			->with('title', 'Garis Theme');
	}

}