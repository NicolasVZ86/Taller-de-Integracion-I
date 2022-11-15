$(buscar_datos());

function buscar_datos(consulta) {
    $.ajax({
        url: "../php/carga_histo.php",
        type: "POST",
        dataType: 'html',
        data: { consulta: consulta },
    })
        .done(function (respuesta) {
            $("#datos").html(respuesta);
        })
        .fail(function () {
            console.log("error")
        })
}

async function usu(){
    const usu = await fetch('../php/usu.php');
    const mensaje = await usu.json();
    document.getElementById('usuario').innerHTML=mensaje.usuario;
}
usu();