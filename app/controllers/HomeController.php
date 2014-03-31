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
		return View::make('showcase.index');
	}

	public function eternity()
	{
		return View::make('eternity.index');
	}

	public function tour()
	{
		$inputs = Input::all();

		$data = new stdClass();
		$data->bride = $inputs['name_1'];
		$data->groom = $inputs['name_2'];
		$data->date = Carbon::createFromFormat('Y-m-d', $inputs['date']);
		$data->venue = $inputs['venue'];
		// $data->color = $inputs['color'];

		// we need to get a clean uuid to use for our tour document
		// GET 'http://jordanskole.cloudant.com/coolhouse-db/_uuids/'
		$ch = curl_init('https://jordanskole.cloudant.com/_uuids');
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($ch, CURLOPT_HEADER, 0);
		$res = json_decode(curl_exec($ch));
		curl_close($ch);

		// lets set our dummy data to use this uuid
		$data->uuid = $res->uuids[0];
		
		return View::make('eternity.tour')
			->with('data', $data);
	}

	public function get_tour()
	{

		// add some dummy data
		$dummy = new stdClass();
		$dummy->bride = 'Booger';
		$dummy->groom = 'The Bee';
		$dummy->date = Carbon::createFromFormat('Y-m-d', '2014-8-16');
		$dummy->venue = 'The Grand Ballroom';

		// we need to get a clean uuid to use for our tour document
		// GET 'http://jordanskole.cloudant.com/coolhouse-db/_uuids/'
		$ch = curl_init('https://jordanskole.cloudant.com/_uuids');
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($ch, CURLOPT_HEADER, 0);
		$data = json_decode(curl_exec($ch));
		curl_close($ch);

		// lets set our dummy data to use this uuid
		$dummy->uuid = $data->uuids[0];

		// now we need to make a CouchDB document
		$ch = curl_init('https://jordanskole.cloudant.com/cutest-two-dev-tour/'.$dummy->uuid);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		// we are doing a PUT request
		curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "PUT");
		// adding the post variables to the request
		// and pass an empty json string
		curl_setopt($ch, CURLOPT_POSTFIELDS, "{}");
		// make sure we set the headers
		curl_setopt($ch, CURLOPT_HTTPHEADER, ['Content-Type: application/json']);
		// run this puppy
		$output = curl_exec($ch);		
		// shut 'er down
		curl_close($ch);

		return View::make('eternity.tour')
			->with('data', $dummy);
	}

	public function put_tour()
	{

		// grab all the inputs we just grabbed
		$inputs = Input::all();

		// we need to get the _rev of the current document to include in the update
		$ch = curl_init('https://jordanskole.cloudant.com/cutest-two-dev-tour/'.$inputs['pk']);
		// do a GET request
		curl_setopt($ch, CURLOPT_HTTPGET, 1);
		// Yup, we sure do want data back
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		// send this puppy
		$get_output = curl_exec($ch);
		// and then shut 'er down
		curl_close($ch);
		// then we gotta transform our data into an object
		$data = json_decode($get_output);

		// pass our data that we just submitted a la ajax
		$data->$inputs['name'] = $inputs['value'];

		// and turn that into a JSON string
		$data = json_encode($data);


		$ch = curl_init('https://jordanskole.cloudant.com/cutest-two-dev-tour/'.$inputs['pk']);
		// $ch = curl_init('http://requestb.in/1hkusvq1');
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		// we are doing a PUT request
		curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "PUT");
		// adding the post variables to the request
		// and pass an empty json string
		curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
		// make sure we set the headers
		curl_setopt($ch, CURLOPT_HTTPHEADER, ['Content-Type: application/json']);
		// run this puppy
		$output = curl_exec($ch);
		// and shut 'er down'
		curl_close($ch);

		return $output;
	}

}