<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Utilidades\PersonasGuzzleUtilidades;

class ConsumoPersonasController extends Controller {

	protected $personas;

	public function __construct(PersonasGuzzleUtilidades $personas)
	{
		$this->personas = $personas;
	}

	public function index()
	{
		$datos = $this->personas->all();
		return view('personas.index', compact('datos'));
	}

	public function show($id)
	{
		$datos = $this->personas->find($id);
		return view('personas.show', compact('datos'));
	}

	public function create()
	{
		return view('personas.create');
	}

	public function store()
	{
		//
	}

	public function edit($id)
	{
		$datos = $this->personas->find($id);
		return view('personas.edit', compact('datos'));
	}


	public function update($id)
	{
		//
	}

	public function destroy($id)
	{
		$this->personas->destroy($id);
		return redirect('/')->with('estado', 'La persona '.$id.' ha sido borrada de BD');
	}

}
