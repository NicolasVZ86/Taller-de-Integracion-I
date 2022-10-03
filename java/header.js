function hola(){
    let element = document.getElementById('link_1');
    let elementStyle = window.getComputedStyle(element, 'hover');
    let elementColor = elementStyle.getPropertyValue('background-color');
    if(elementColor=="rgb(3, 23, 40)"){
        document.body.style.backgroundColor="rgb(255,255,255)"
        document.getElementById("modoos").textContent = "Modo Oscuro"
    }else{
        document.body.style.backgroundColor="rgb(3, 23, 40)"
        document.getElementById("modoos").textContent = "Modo Claro"
    }
}