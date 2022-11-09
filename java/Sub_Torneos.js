$('#boton').click(function(){
    var nombre=document.getElementById("nombreTorneo").value;
    var Game=document.getElementById("selectGame").value;
    var llaves=document.getElementById("selectLlaves").value;
    var Modo_juego=document.getElementById("Modjuego").value;
    var fecha=document.getElementById("dateTorneo").value;

    var ruta="nom="+nombre+"&game="+Game+"&llaves="+llaves+"&Modo_juego="+Modo_juego+"&fecha="+fecha;
    $.ajax({
        url:"../php/Sub_Torneos.php",
        type: "POST",
        data: ruta,
    })
    .done(function(res){
        $('#respuesta').html(res);
    })
})