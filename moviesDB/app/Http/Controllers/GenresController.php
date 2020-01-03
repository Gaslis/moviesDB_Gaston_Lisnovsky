<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;
use App\Genre;
use App\Actor;

class GenresController extends Controller
{

    public function index()
    {
        //
    }
    public function listaG()
    {
      $generos = Genre::paginate(12);
      return view('genres.listaGeneros')->with('generos',$generos);
    }

    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        //
    }


    public function show($id)
    {
        //
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
