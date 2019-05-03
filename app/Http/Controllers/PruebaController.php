<?php

namespace Cine\Http\Controllers;



class PruebaController extends Controller
{
    /**
     * Show the profile for the given user.
     *
     * @param  int  $id
     * @return View
     */
    public function index()
    {
        return "Holi desde el controlador";
    }
	
	public function nombre($nombre)
    {
        return "Holi, mi nombre es: ".$nombre;
    }
}