const boton_iniciarSesion = document.querySelector(".boton_iniciarfSesion");
const boton_registrarse = document.querySelector(".boton_iniciarfRegistro");
const modo_registro = document.querySelector("#gridcontenedor_formularios");
const modo_inicioSesion = document.querySelector("#item3_contenedor_iniciarSesion");

document.addEventListener('click', e => {
    if(e.target ===  boton_iniciarSesion) {
        document.getElementById("gridcontenedor_formularios").style.visibility = 'hidden';
        document.getElementById("item3_contenedor_iniciarSesion").style.visibility = "visible";
    }
    if(e.target === boton_registrarse) {
        document.getElementById("gridcontenedor_formularios").style.visibility = 'visible';
        document.getElementById("item3_contenedor_iniciarSesion").style.visibility = "hidden";
    }
})