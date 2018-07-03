<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use GuzzleHttp\Client;

class DepartamentosController extends Controller {
	
	public function index()
	{
		$client = new Client([
			'base_uri' => 'https://api.salud.gob.sv/',
			'timeout'  => 2.0
		]);
		$response = $client->request('GET', 'departamentos',
			[
				'headers' => [
					'Accept'     => 'application/json'
				]
			]
		);
		$departamentos = json_decode($response->getBody()->getContents());
		return view('departamentos.index', compact('departamentos'));
	}
}
