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

//VALIDANDO FORMULARIOS---------------
//Restricciones para los inputs (todavia no lo uso)
const expresiones = {
	usuario: /^[a-zA-Z0-9\_\-]{4,16}$/, // Letras, numeros, guion y guion_bajo
	nombre: /^[a-zA-ZÀ-ÿ\s]{1,40}$/, // Letras y espacios, pueden llevar acentos.
	password: /^.{4,12}$/, // 4 a 12 digitos.
	correo: /^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$/,
	telefono: /^\d{7,14}$/ // 7 a 14 numeros.
}

//Recibiendo los datos del formulario registro
const form = document.getElementById("idform_formularioregistro");
const inputs = document.querySelectorAll("#idform_formularioregistro input");



var puede = false

form.addEventListener("submit", (hacer) => {
    hacer.preventDefault();
})

//Identifica a cada input por su atributo 'name'
inputs.forEach((input) => {
    input.addEventListener("keyup", validarFormulario);
});

//Validando formularios 
function validarFormulario (validar) {
    //Identifica el atributo name del input y luego valida
    switch (validar.target.name) {
        case "nombre":
            if(expresiones.nombre.test(validar.target.value)){
                document.getElementById("nombre_error").innerHTML = "Es válido!";
                document.getElementById("nombre_error").classList.add("inputcorrecto");
                puede = true
            } else {
                //Lo que pasará cuando el input es incorrecto
                document.getElementById("nombre_error").innerHTML = "No puede contener letras, números ni guion";
                document.getElementById("nombre_error").classList.remove("inputcorrecto");
                document.getElementById("nombre_error").classList.add("inputerror")
            }
        break;
        case "apellido":
            if (expresiones.nombre.test(validar.target.value)){
                document.getElementById("apellido_error").innerHTML = "Es válido!" ;
                document.getElementById("apellido_error").classList.add("inputcorrecto");
                puede = true
            } else {
                document.getElementById("apellido_error").innerHTML = "No puede contener letras, números ni guion";
                document.getElementById("apellido_error").classList.remove("inputcorrecto");
                document.getElementById("apellido_error").classList.add("inputerror")
            }
        break;
        case "correo":
            if (expresiones.correo.test(validar.target.value)){
                document.getElementById("correo_error").innerHTML = "Es válido!";
                document.getElementById("correo_error").classList.add("inputcorrecto");
                puede = true
            } else {
                document.getElementById("correo_error").innerHTML = "Ingrese un correo válido";
                document.getElementById("correo_error").classList.remove("inputcorrecto");
                document.getElementById("correo_error").classList.add("inputerror")
            }
        break;
        case "usuario":
            if (expresiones.usuario.test(validar.target.value)){
                document.getElementById("usuario_error").innerHTML = "Es valido!";
                document.getElementById("usuario_error").classList.add("inputcorrecto");
                puede = true

            } else {
                document.getElementById("usuario_error").innerHTML = "Sólo letras, numeros, guion y guion_bajo";
                document.getElementById("usuario_error").classList.remove("inputcorrecto");
                document.getElementById("usuario_error").classList.add("inputerror")
            }
        break;
        case "contrasena":
            if (expresiones.password.test(validar.target.value)){
                document.getElementById("contrasena_error").innerHTML = "Es valida!";
                document.getElementById("contrasena_error").classList.add("inputcorrecto");
                puede = true
            } else {
                document.getElementById("contrasena_error").innerHTML = "Minímo de 4 caracteres. hasta 12 caracteres";
                document.getElementById("contrasena_error").classList.remove("inputcorrecto");
                document.getElementById("contrasena_error").classList.add("inputerror")
            }
        break;
    }
}

async function verificar_datos(datosFormulario){
    const i = await fetch('../php/vereficardatos.php', {
        method: 'POST',
        body: datosFormulario});
    const io = await i.json();
    if (io.status == "si"){
        return true
    }
    else{
        return false
    }
    
}
/* crear cuenta en base de datos */
async function enviarcuenta(datosFormulario){
if (puede){
    i =await verificar_datos(datosFormulario)
    if (i){
    await fetch('../php/agregarusuario.php', {
        method: 'POST',
        body: datosFormulario});
    alert ("usuario creado exitosamente");
    }else {
        alert("Su usuario o correo ya esta registrado")
    }
}else{
    alert("complete los campos bien")
}
}
document
.getElementById('idform_formularioregistro')
.addEventListener('submit', function (event) {
    event.preventDefault();
    const formulario = document.getElementById('idform_formularioregistro');
    const formularioData = new FormData(formulario);
    enviarcuenta(formularioData);
    });


/* ----------------------------------------------------------*/

const form_sesion = document.getElementById("formulario_iniciarSesion");
const usuario_sesion = document.getElementById("fiusuario");
const contrasena_sesion = document.getElementById("ficontrasena");
const error_sesion = document.getElementById("error_sesion");
error_sesion.style.color="red";

form_sesion.addEventListener("submit", (hacer) => {
    hacer.preventDefault();
})

function enviarSesion() {
    const p = true; 
    if(usuario_sesion.value === null || usuario_sesion.value === ""){
        error_sesion.innerHTML = "Debes ingresar tu nombre de usuario";
        p = false ;
    }
    if(contrasena_sesion.value === null || contrasena_sesion.value === ""){
        error_sesion.innerHTML = "Debes ingresar tu contraseña";
        p = false;
    }
    return p;
}


/*----------------------- inicio secion --------------------*/


async function iniciosecion(datos){
        const men = await fetch('../php/login.php', {
            method: 'POST',
            body: datos});
        const mensaje = await men.json();
        alert(mensaje.status)
        if("sesion iniciada" == mensaje.status){
            location.href = "../html/Perfil.html"
        }
}
    document
    .getElementById('formulario_iniciarSesion')
    .addEventListener('submit', function (event) {
        event.preventDefault();
        const formulario = document.getElementById('formulario_iniciarSesion');
        const formularioData = new FormData(formulario);
        iniciosecion(formularioData);
        });


/* -------------Ver la contraseña en el registro--------------- */
var input = document.getElementById('frcontrasena');
var boton = document.getElementById("boton");

boton.addEventListener('click', mostrarContrasena);

function mostrarContrasena() {
    if (input.type == "password") {
        input.type = "text"

        setTimeout("ocultar()", 3000)
    } else {
        input.type = "password"
    }
}

function ocultar() {
    input.type = "password"
}

/* -------------Script que genera una contraseña aleatorea--------------- */
function GenerarContrasena() {
    var caracteres = "0123456789qwertyuiopasdfghjklzxcvbnmQWERTYUIOPASDFGHJKLZXCVBNM!@#$%^&*()_+";
}