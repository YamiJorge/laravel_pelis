<?php

namespace Cine\Http\Controllers;

use Illuminate\Http\Request;
use Cine\Http\Requests;
use Cine\Http\Controllers\Controller;
use Cine\Genero;
use Session;
use Redirect;
use Cine\Pelicula;

class PeliControlador extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $peliculas = Pelicula::Peliculas();
        return view('pelicula.index',compact('peliculas'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $generos = Genero::pluck('genero', 'id');
        return view('pelicula.create',compact('generos'));
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Pelicula::create($request->all());
        return redirect('/pelicula')->with('message','Película creada exitosamente');
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pelicula = Pelicula::find($id);
        $generos = Genero::pluck('genero', 'id');
        return view('pelicula.edit',['pelicula'=>$pelicula,'generos'=>$generos]);
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $pelicula = Pelicula::find($id);
        $pelicula->fill($request->all());
        $pelicula->save();
        Session::flash('message','Pelicula Editada Correctamente');
        return Redirect::to('/pelicula');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pelicula = Pelicula::find($id);//En vez de usar Destroy, buscaremos el usuario según el ID
        \Storage::delete($pelicula->path);
        $pelicula->delete();//y ahora se hará referencia al método Delete
        Session::flash('message','Película Eliminada Correctamente');
        return Redirect::to('/pelicula');
    }
}