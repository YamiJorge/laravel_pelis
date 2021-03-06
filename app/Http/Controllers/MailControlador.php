<?php

namespace Cine\Http\Controllers;
use Illuminate\Http\Request;
use Cine\Http\Requests;
use Cine\Http\Controllers\Controller;
use Mail;
use Session;
use Redirect;
class MailControlador extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)/*Esta función enviará un mensaje a la vista emails/contact, el cual
    será enviado al correo de contacto definido.
    Luego redirigirá a la ventana contacto*/
    {
        Mail::send('emails.contact',$request->all(), function($msj){
            $msj->subject('Correo de Contacto');
            $msj->to('darkmagician.jorge@gmail.com');
        });
        Session::flash('message','Mensaje enviado correctamente');
        return Redirect::to('contacto');
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
        //
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
        //
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