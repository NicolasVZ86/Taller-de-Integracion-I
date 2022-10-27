//Se reciben los datos mediante id's que abarcan el mensaje y el formulario
const boton_entrariniciarSesion = document.querySelector('#botonInciarSesion');
const boton_entrarregistrarse = document.querySelector('#botonInciarRegistro');
const modo_registro = document.querySelector('#article_formularioregistro');
const modo_inicioSesion = document.querySelector('#article_formularioiniciarSesion');

//Permite cambiar el formulario presente al otro formulario
//Es decir, cambiar del modo registro al modo login
document.addEventListener('click', e => {
    if(e.target ===  boton_entrariniciarSesion) {
        document.getElementById("article_formularioregistro").style.display = "none";
        document.getElementById("article_formularioiniciarSesion").style.display = "block";

        document.getElementById("articleid_msgAltModregistro").style.display = "none";
        document.getElementById("articleid_msgAltModsesion").style.display = "block";
    }
    if(e.target === boton_entrarregistrarse) {
        document.getElementById("article_formularioregistro").style.display = "block";
        document.getElementById("article_formularioiniciarSesion").style.display = "none";

        document.getElementById("articleid_msgAltModregistro").style.display = "block";
        document.getElementById("articleid_msgAltModsesion").style.display = "none";
    }
})


//Restricciones para los inputs (todavia no lo uso)
const expresiones = {
	usuario: /^[a-zA-Z0-9\_\-]{4,16}$/, // Letras, numeros, guion y guion_bajo
	nombre: /^[a-zA-ZÀ-ÿ\s]{1,40}$/, // Letras y espacios, pueden llevar acentos.
	password: /^.{4,12}$/, // 4 a 12 digitos.
	correo: /^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$/,
	telefono: /^\d{7,14}$/ // 7 a 14 numeros.
}

//Recibiendo los datos del formulario registro
const form = document.getElementById('idform_formularioregistro');
const inputs = document.querySelectorAll('#idform_formularioregistro input');
const spanerror = document.querySelectorAll('.error');

//Se evaluara el input cada vez que se escriba una letra
//Tambien se evaluara el input cada vez que haga click en otro lado
inputs.forEach((input) => {
	input.addEventListener('keyup', validarFormulario);
	input.addEventListener('blur', validarFormulario);
});

//Validaciones
function validarFormulario() {
    
}

//Errores que debe enviar cuando no cumplen las condiciones
function enviarError(){

}

//Se eleminan los errores cuando cumplen la validacion
function eliminarError() {

}
