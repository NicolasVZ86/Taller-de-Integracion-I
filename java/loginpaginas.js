async function logeado(pagina){
    const men = await fetch('../php/logininiciado.php');
    const mensaje = await men.json();
    if(mensaje.status == "no"){
        location.href = "../html/registroYlogin.html"
    }else{
        location.href = pagina
    }
}  
async function cerses(){
    await fetch('../php/cerrrarsesion.php');
    location.href = "../html/registroYlogin.html"
    alert("Secion cerrada");
}

