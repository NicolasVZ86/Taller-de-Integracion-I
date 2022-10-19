document.getElementById('Formulario').addEventListener('submit',function(e){
    e.preventDefault();

    let Formulario  = new FormData(document.getElementById('Formulario'));
    fetch('../php/filtro.php',{
        method: 'POST',
        body: Formulario
    })
    .then(res => res.json())
    .then(data => {
        if (data=='true'){
            document.getElementById(xName).value='';
            document.getElementById(xJuego).value='';
            document.getElementById(xLlave).value='';
            alert('Filtro agregado.');
        }else{
            console.log(data);
        }
    });
});