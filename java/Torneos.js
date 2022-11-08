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





// document.getElementById("boton").addEventListener("click",function(){
//     buscar_datos();
// });