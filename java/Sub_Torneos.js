$('#boton').click(function(){
    var nombre=document.getElementById("nombreTorneo").value;
    var Game=document.getElementById("selectgame").value;
    var llaves=document.getElementById("selectLLaves").values;
    var Modo_juego=document.getElementById("Modjuego").values;
    var fecha=document.getElementById("datetorneo")

    var ruta="nom="+nombre+"&game="+Game+"&llaves"+llaves+"&Modo_juego"+Modo_juego+"&fecha"+fecha;
    $.ajax({
        url:"../php/Sub_torneos.php",
        type: "POST",
        data: ruta,
    })
    .done(function(res){
        $('#respuesta').html(res);
    })
})