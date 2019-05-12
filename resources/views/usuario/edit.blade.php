@extends('layouts.admin')
@section('content')
    {!!Form::model($user,['route'=>['usuario.update',$user],'method'=>'PUT'])!!}
    @include('usuario.forms.usr'){{--Acá incluimos el formulario del archivo usr.blade.php de
    la carpeta usuario/forms--}}
    {!!Form::submit('Actualizar',['class'=>'btn btn-primary'])!!}{{--Acá incluimos un botón de Actualizar--}}
    {!!Form::close()!!}
    {!!Form::open(['route'=>['usuario.destroy', $user], 'method' => 'DELETE'])!!}{{--Acá incluimos un botón similar al
    anterior de Actualizar, aunque acá lo usaremos para eliminar el usuario usando el método Destroy--}}
    {!!Form::submit('Eliminar',['class'=>'btn btn-danger'])!!}
    {!!Form::close()!!}
@endsection