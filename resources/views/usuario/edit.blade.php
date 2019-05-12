@extends('layouts.admin')
@section('content')
    {!!Form::model($user,['route'=>['usuario.update',$user],'method'=>'PUT'])!!}
    @include('usuario.forms.usr'){{--Acá incluimos el formulario del archivo usr.blade.php de
    la carpeta usuario/forms--}}
    {!!Form::submit('Actualizar',['class'=>'btn btn-primary'])!!}
    {!!Form::close()!!}
@endsection