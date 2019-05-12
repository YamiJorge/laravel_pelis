{{--Este formulario es igual al de index.blade en la carpeta Usuario, con la salvedad de que acá retornará
los datos del usuario creado y dará la opción de editar.--}}

<div class="form-group">
    {!!Form::label('nombre','Nombre:')!!}
    {!!Form::text('name',null,['class'=>'form-control','placeholder'=>'Ingresa el Nombre del usuario'])!!}
</div>
<div class="form-group">
    {!!Form::label('email','Correo:')!!}
    {!!Form::text('email',null,['class'=>'form-control','placeholder'=>'Ingresa el Nombre del usuario'])!!}
</div>
<div class="form-group">
    {!!Form::label('password','Contraseña:')!!}
    {!!Form::password('password',['class'=>'form-control','placeholder'=>'Ingresa el Nombre del usuario'])!!}
</div>