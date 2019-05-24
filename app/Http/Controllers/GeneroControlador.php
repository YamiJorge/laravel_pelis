<?php

namespace Cine\Http\Controllers;

use Illuminate\Http\Request;
use Cine\Http\Requests;
use Cine\Http\Requests\GeneroRequest;
use Cine\Http\Controllers\Controller;
use Cine\Genero;
class GeneroControlador extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function listing()/*Acá se hace una petición AJAX en la cual se retornarán los géneros
    que ya hayan sido guardados*/
    {
        $generos = Genero::all();

        return response()->json($generos->toArray());    }



    public function index()
    {

        return view('genero.index');
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('genero.create');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(GeneroRequest $request)
    {
        if($request->ajax()){/*Acá básicamente enviará una petición por AJAX al script.js. Si la petición es
        exitosa, el json retornará una respuesta y creará el objeto*/
            Genero::create($request->all());
            return response()->json([
                "mensaje" => "creado"
            ]);
        }
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
    public function edit($id)/*Acá básicamente enviará una petición por AJAX al script.js. Si la petición es
        exitosa, el json retornará una respuesta. En este caso, encontrará el género según el ID.*/
    {
        $genero = Genero::find($id);

        return response()->json($genero->toArray());
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
        $genero = Genero::find($id);
        $genero->fill($request->all());
        $genero->save();
        return response()->json(["mensaje" => "listo"]);
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)/*Acá básicamente enviará una petición por AJAX al script.js. Si la petición es
        exitosa, el json retornará una respuesta. En este caso, borrará el género según el ID.*/
    {
        $genero = Genero::find($id);
        $genero->delete();
        return response()->json([ "mensaje" => "borrado" ]);
    }
}