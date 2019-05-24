@extends('layouts.admin')
@section('content')
    @include('alerts.request')

    {!!Form::model($pelicula,['route'=> ['pelicula.update',$pelicula->id],'method'=>'PUT','files' => true])!!}
    @include('pelicula.forms.pelicula')
    {!!Form::submit('Actualizar',['class'=>'btn btn-primary'])!!}
    {!!Form::close()!!}

    {!!Form::open(['route'=> ['pelicula.destroy',$pelicula->id],'method'=>'DELETE'])!!}
    {!!Form::submit('Eliminar',['class'=>'btn btn-danger'])!!}
    {!!Form::close()!!}
@endsection