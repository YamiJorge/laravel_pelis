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

{!! Form::open(['route'=>'objeto.store', 'method'=>'METODO', 'files' => true, 'role' => 'form']) !!}
    // Acá coloca los elementos del Formulario
{!! Form::close() !!}

--}}
@include('alerts.request'){{--Acá se hace un include a la ruta views/alerts/request.blade.php --}}
    {!!Form::open(['route'=>'usuario.store', 'method'=>'POST', 'files' => true, 'role' => 'form']) !!}
    @include('usuario.forms.usr'){{--Acá hacemos include a (usuario/forms/usr.blade.php para llamar al formulario--}}
    {!!Form::submit('Registrar',['class'=>'btn btn-primary'])!!}
    {!!Form::close()!!}
@endsection