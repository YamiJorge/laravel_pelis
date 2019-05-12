<?php

namespace Cine\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Cine\User; //Acá hacemos referencia directa al usuario
use Illuminate\Support\Facades\Redirect;

class UsuarioControlador extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();//Acá tomará como valor de $users los datos de todos los usuarios registrados en la bd
        return view('usuario.index',compact('users'));//Acá se desplegarán los usuarios existentes.
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('usuario.create'); //Acá retornamos una vista para crear usuario
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        User::create([ /*En este método, vamos a crear el usuario en base a las columnas declaradas
        que en este caso serían el nombre, email y contraseña.*/
            'name' => $request['name'],
            'email' => $request['email'],
            'password' => ($request['password']),
        ]);
        return redirect('/usuario')->with('message','store');/*Si el usuario es creado, se redirigirá
        automáticamente al Index*/
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
        $user = User::find($id);
        return view('usuario.edit',['user'=>$user]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)/*En este método, se actualizará el usuario y posteriormente
    redirigirá al index*/
    {
        $user = User::find($id);
        $user->fill($request->all());
        $user->save();
        Session::flash('message','Usuario Actualizado Correctamente');/*Esta es la variable Session declarada
        en el index.blade.php de la carpeta Usuario*/
        return Redirect::to('/usuario');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
