@extends('layouts.admin')
@if(Session::has('message')){{--Si la variable Session (que almacenará info sobre el user)
tiene un mensaje, lo obtendremos y lo mostraremos--}}
    <div class="alert alert-success alert-dismissible" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        {{Session::get('message')}}
    </div>
@endif
@section('content')
    <table class="table">
        <thead>
        <th>Nombre</th>
        <th>Correo</th>
        <th>Operacion</th>
        </thead>
        @foreach($users as $user)
            <tbody>
            <td>{{$user->name}}</td>
            <td>{{$user->email}}</td>
            <td>
                {{--Éste es un "Link to Route" de Laravel Collective, el cual agregará botones para editar--}}
                {!!link_to_route('usuario.edit', $title = 'Editar', $parameters = $user, $attributes = ['class'=>'btn btn-primary'])!!}
            </td>
            </tbody>
        @endforeach
    </table>
    {!!$users->render()!!} {{--Acá vamos a renderear los elementos que no salgan enlistados por las restricciones
    impuestas en la paginación--}}
@endsection