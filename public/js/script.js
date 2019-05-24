$("#registro").click(function(){
    var dato = $("#genero").val();
    var route = "http://127.0.0.1:8000/genero";
    var token = $("#token").val();

    $.ajax({
        url: route,
        headers: {'X-CSRF-TOKEN': token},
        type: 'POST',
        dataType: 'json',
        data:{genero: dato},

        success:function(){
            $("#msj-success").fadeIn();
        },

        error:function(msj){
            console.log(msj.responseJSON.errors.genero);
            $("#msj").html(msj.responseJSON.errors.genero);
            $("#msj-error").fadeIn();
        }
    });
});