$(document).ready(function(){
    Carga();
});

function Carga(){
    var tablaDatos = $("#datos");
    var route = "http://127.0.0.1:8000/generos";

    $("#datos").empty();
    $.get(route, function(res){
        $(res).each(function(key,value){
            tablaDatos.append("<tr><td>"+value.genero+"</td><td><button value="+value.id+" OnClick='Mostrar(this);' class='btn btn-primary' data-toggle='modal' data-target='#myModal'>Editar</button><button class='btn btn-danger' value="+value.id+" OnClick='Eliminar(this);'>Eliminar</button></td></tr>");
        });
    });
}

function Eliminar(btn){
    var route = "http://127.0.0.1:8000/genero/"+btn.value+"";
    var token = $("#token").val();

    $.ajax({
        url: route,
        headers: {'X-CSRF-TOKEN': token},
        type: 'DELETE',
        dataType: 'json',
        success: function(){
            Carga();
            $("#msj-success").fadeIn();
        }
    });
}

function Mostrar(btn){
    var route = "http://127.0.0.1:8000/genero/"+btn.value+"/edit";

    $.get(route, function(res){
        $("#genero").val(res.genero);
        $("#id").val(res.id);
    });
}

$("#actualizar").click(function(){
    var value = $("#id").val();
    var dato = $("#genero").val();
    var route = "http://127.0.0.1:8000/genero/"+value+"";
    var token = $("#token").val();

    $.ajax({
        url: route,
        headers: {'X-CSRF-TOKEN': token},
        type: 'PUT',
        dataType: 'json',
        data: {genero: dato},
        success: function(){
            Carga();
            $("#myModal").modal('toggle');
            $("#msj-success").fadeIn();
        }
    });
});