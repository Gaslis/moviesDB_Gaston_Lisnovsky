<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;
use App\Genre;
use App\Actor;

class ActorsController extends Controller
{

    public function index()
    {
        //
    }

    public function listaA()
    {
      $actores = Actor::paginate(12);
      return view('actors.listaActores')->with('actores',$actores);
    }

    public function create()
    {
      $actores = Actor::all();
      return view('actors.agregarActor')->with('actores',$actores);
    }


    public function store(Request $request)
    {
      $reglas = [
        'first_name' => 'required',
        'last_name' => 'required',
        'rating' => 'required',
    ];
    $mensajes = [
        'nombre.required' => 'Este campo :attribute es requerido...',
        'required' => 'Este campo :attribute es requerido...',
        'numeric' => 'Ingrese en este campo :attribute sólo números...',
        'date' => 'Debe indicar una fecha...'
    ];
      $this->validate($request,$reglas,$mensajes);

      $actor = new Actor($request->all());

      // $ruta =  $request->file('poster')->store('public');
      // $nombreArchivo = basename($ruta);
      // $product->poster = $nombreArchivo;

      $actor->save();
      return redirect('/actors/listaActores');
    }


    public function show($id)
    {
      $actor = Actor::find($id);
      return view('actors.detalleActor')->with('actor',$actor);
    }


    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        //
    }


    public function destroy($id)
    {
        //
    }
}
