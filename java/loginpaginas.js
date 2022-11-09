async function logeado(pagina){
    const men = await fetch('../php/logininiciado.php');
    const mensaje = await men.json();
    if(mensaje.status == "no"){
        location.href = "../html/registroYlogin.html"
    }else{
        location.href = pagina
    }
    return mensaje.status
}  
async function cerses(){
    await fetch('../php/cerrrarsesion.php');
    location.href = "../html/registroYlogin.html"
    alert("Secion cerrada");
}
async function logeadoenpagina(){
    const men = await fetch('../php/logininiciado.php');
    const mensaje = await men.json();
    if(mensaje.status == "no"){
        location.href = "../html/registroYlogin.html"
    }
}



function boton(consulta) {
    $.ajax({
        url: "../php/poton.php",
        type: "POST",
        dataType: 'html',
        data: { consulta: consulta },
    })
        .done(function (respuesta) {
            $("#botonlog").html(respuesta);
        })
        .fail(function () {
            console.log("error")
        })
}



$(boton());
