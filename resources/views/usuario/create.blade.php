@extends('layouts.admin')
@section('content'){{--Acá se usaron elementos de Laravel Collective, el cual es un conjunto de elementos para
formularios.
Para instalarlo se usa:
composer require "laravelcollective/html"
Luego entra a config/app.php y agrega en Providers:
Collective\Html\HtmlServiceProvider::class,
Finalmente, en el mismo archivo, agrega en Aliases:
'Form' => Collective\Html\FormFacade::class,
'Html' => Collective\Html\HtmlFacade::class,

Para crear formularios, se usa la siguiente sintaxis:

{!! Form::open(['route'=>'objeto.store', 'method'=>'METODP', 'files' => true, 'role' => 'form']) !!}
    // Acá coloca los elementos del Formulario
{!! Form::close() !!}

--}}
    {!!Form::open(['route'=>'usuario.store', 'method'=>'POST', 'files' => true, 'role' => 'form']) !!}
    <div class="form-group">
        {!!Form::label('nombre','Nombre:')!!}
        {!!Form::text('name',null,['class'=>'form-control','placeholder'=>'Ingresa el Nombre del usuario'])!!}
    </div>
    <div class="form-group">
        {!!Form::label('email','Correo:')!!}
        {!!Form::text('email',null,['class'=>'form-control','placeholder'=>'Ingresa el Email del usuario'])!!}
    </div>
    <div class="form-group">
        {!!Form::label('password','Contraseña:')!!}
        {!!Form::password('password',['class'=>'form-control','placeholder'=>'Ingresa la contrseña del usuario'])!!}
    </div>
    {!!Form::submit('Registrar',['class'=>'btn btn-primary'])!!}
    {!!Form::close()!!}
@endsection