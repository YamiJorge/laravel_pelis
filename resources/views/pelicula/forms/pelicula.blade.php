<div class="form-group">
    {!!Form::label('nombre','Nombre:')!!}
    {!!Form::text('nombre',null,['class'=>'form-control', 'placeholder'=>'Ingresa el Nombre de la pelicula'])!!}
</div>
<div class="form-group">
    {!!Form::label('Elenco','Elenco:')!!}
    {!!Form::text('reparto',null,['class'=>'form-control', 'placeholder'=>'Ingresa el reparto'])!!}
</div>
<div class="form-group">
    {!!Form::label('Direccion','Dirección:')!!}
    {!!Form::text('direccion',null,['class'=>'form-control', 'placeholder'=>'Ingresa al director'])!!}
</div>
<div class="form-group">
    {!!Form::label('Duracion','Duración:')!!}
    {!!Form::text('duracion',null,['class'=>'form-control', 'placeholder'=>'Ingresa la duración'])!!}
</div>
<div class="form-group">
    {!!Form::label('Poster','Poster:')!!}
    {!!Form::file('path')!!}
</div>
<div class="form-group">
    {!!Form::label('Genero','Genero:')!!}
    {!!Form::select('id_genero',$generos)!!}
</div>