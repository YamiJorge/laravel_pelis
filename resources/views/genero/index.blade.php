@extends('layouts.admin')
@section('content')
    @include('genero.modal')
    <div id="msj-success" class="alert alert-success alert-dismissible" role="alert" style="display:none">
        <strong> Genero Actualizado Correctamente.</strong>
    </div>
    <table class="table">
        <thead>
        <th>Nombre</th>
        <th>Operaciones</th>
        </thead>

        <tbody id="datos"></tbody>{{--Acá se hará una llamada al Script2 para obtener los géneros.--}}
    </table>

@endsection

@section('scripts')
    {!!Html::script('js/script2.js')!!}{{--Acá agregamos un nuevo script AJAX, con el que actualizaremos el género--}}
@show
