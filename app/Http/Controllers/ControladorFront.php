<?php

namespace Cine\Http\Controllers;

use Cine\Pelicula;
use Illuminate\Http\Request;

class ControladorFront extends Controller
{
    public function __construct(){
        $this->middleware('auth',['only' => 'admin']);/*Este middleware sirve para dar acceso del
    admin solo a usuarios logueados*/
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('index');
    }

    public function contacto()
    {
        return view('contacto');
    }

    public function reviews(){
        $peliculas = Pelicula::Peliculas();
        return view('reviews',compact('peliculas'));
    }

    public function admin()
    {
        return view('admin.index');
    }
}
