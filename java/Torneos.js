$(document).ready(function(){
    function buscar_datos(){
        $.ajax({
            url:"../php/Dat_Torneos.php",
            type: "POST",
            success: function(data){
                $("#datos").html(data);
            }
        })
    }
    buscar_datos();
});

$('#Buscar').click(function(){
    var nombre=document.getElementById("xName").value;
    var Game=document.getElementById("xJuego").value;
    var llaves=document.getElementById("xLlave").value;
    var Modo_juego=document.getElementById("xModo").value;

    var ruta="nom="+nombre+"&game="+Game+"&llaves="+llaves+"&Modo_juego="+Modo_juego;

    $.ajax({
        url:"../php/Filtro.php",
        type: "POST",
        data: ruta,
    })
    .done(function(res){
        $('#datos').html(res);
    })

})





// document.getElementById("boton").addEventListener("click",function(){
//     buscar_datos();
// });