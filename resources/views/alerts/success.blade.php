@if(Session::has('message')){{--Si la variable Session (que almacenará info sobre el user)
tiene un mensaje, lo obtendremos y lo mostraremos--}}
<div class="alert alert-success alert-dismissible" role="alert">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
    {{Session::get('message')}}
</div>
@endif