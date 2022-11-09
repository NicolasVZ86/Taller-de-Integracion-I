boton1 = document.querySelector('#botonzito')
boton2 = document.querySelector('#botonzito2')
boton3 = document.querySelector('#inputenvi')

//En esta funcion implementamos let como variamble limitada para rsalizar un contador
//a la hora de hacer click en un boton llamando asi a su id de html
function contador(boton1, boton2, boton3) {
    let contador1 = 1;
    boton1.addEventListener('click', () => {
        contador1 = contador1 - 1;
        document.querySelector('#mensaje1').innerHTML = contador1

    });
    boton2.addEventListener('click', () => {
        contador1 = contador1 + 1;
        document.querySelector('#mensaje1').innerHTML = contador1
    });
    boton3.addEventListener('click', () => {
        contador1 = 1
        document.querySelector('#mensaje1').innerHTML = contador1
    });
}
contador(boton1, boton2, boton3)