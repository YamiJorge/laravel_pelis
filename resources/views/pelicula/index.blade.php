@extends('layouts.admin')
@include('alerts.success')
@section('content')
    <table class="table">
        <thead>
        <th>Nombre</th>
        <th>Genero</th>
        <th>Direccion</th>
        <th>Caratula</th>
        <th>Operaciones</th>
        </thead>
        @foreach($peliculas as $pelicula)
            <tbody>
            <td>{{$pelicula->nombre}}</td>
            <td>{{$pelicula->genero}}</td>
            <td>{{$pelicula->direccion}}</td>
            <td>
                <img src="peliculas/{{$pelicula->path}}" alt="" style="width:100px;"/>
            </td>
            <td>
                {!!link_to_route('pelicula.edit', $title = 'Editar', $parameters = $pelicula->id, $attributes = ['class'=>'btn btn-primary'])!!}
            </td>
            </tbody>
        @endforeach
    </table>
@endsection