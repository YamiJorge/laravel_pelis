@extends('layouts.principal') {{-- En cada una de nuestras plantillas individuales en lugar de incluir el header o
footer le indicamos a Laravel que la vista debe extender de layouts.principal.php. No es necesario colocar la extensión
del archivo. Tampoco es necesario colocar la ruta completa, ya que Laravel por defecto buscará el archivo dentro
del directorio resources/views. Para esto usamos @extends --}}
@section('content') {{-- Hecho lo anterior, debemos definir las secciones. Para ello utilizamos la directiva @section,
pasando como argumento el nombre de la sección. --}}
@include('alerts.errors')
@include('alerts.request')
    <div class="header">
        <div class="top-header">
            <div class="logo">
                <a href="index.html"><img src="images/logo.png" alt="" /></a>
                <p>Movie Theater</p>
            </div>
            <div class="clearfix"></div>
        </div>
        <div class="header-info">
            <h1>BIG HERO 6</h1>
            {!!Form::open(['route'=>'log.store', 'method'=>'POST'])!!}{{--Acá abrimos un formulario donde
            haremos login--}}
            <div class="form-group">
                {!!Form::label('correo','Correo:')!!}
                {!!Form::email('email',null,['class'=>'form-control', 'placeholder'=>'Ingresa tu correo'])!!}
            </div>
            <div class="form-group">
                {!!Form::label('contrasena','Contraseña:')!!}
                {!!Form::password('password',['class'=>'form-control', 'placeholder'=>'Ingresa tu contraseña'])!!}
            </div>
            {!!Form::submit('Iniciar',['class'=>'btn btn-primary'])!!}
            {!!Form::close()!!}
        </div>
    </div>
    <div class="review-slider">
        <ul id="flexiselDemo1">
            <li><img src="images/r1.jpg" alt=""/></li>
            <li><img src="images/r2.jpg" alt=""/></li>
            <li><img src="images/r3.jpg" alt=""/></li>
            <li><img src="images/r4.jpg" alt=""/></li>
            <li><img src="images/r5.jpg" alt=""/></li>
            <li><img src="images/r6.jpg" alt=""/></li>
        </ul>
    </div>
@endsection