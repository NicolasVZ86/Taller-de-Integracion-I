var uno=document.getElementById('uno');
var dos=document.getElementById('dos');
var tres=document.getElementById('tres');
var form1=document.getElementById('form1');
var form2=document.getElementById('form2');
var form3=document.getElementById('form3');
var line1=document.getElementById('line1');
var line2=document.getElementById('line2');

function MostrarForm1(){
    form2.style.left='70px';
    form1.style.left='-500px';
    form3.style.left='1000px';
    dos.style.border='rgb(77, 88, 74)';
    dos.style.backgroundColor='rgb(77, 88, 74)';
    line1.style.backgroundColor='rgb(77, 88, 74)';
    dos.style.color='white';
    tres.style.border='1.5px solid black';
    tres.style.backgroundColor='white';
    tres.style.color='black';
    line2.style.backgroundColor='black';

}
function ToForm3(){
    form2.style.left='-500px';
    form1.style.left='-1000px';
    form3.style.left='70px'
    dos.style.border='rgb(77, 88, 74)';
    dos.style.backgroundColor='rgb(77, 88, 74)';
    line1.style.backgroundColor='rgb(77, 88, 74)';
    dos.style.color='white';
    tres.style.border='rgb(77, 88, 74)';
    tres.style.backgroundColor='rgb(77, 88, 74)';
    tres.style.color='white';
    line2.style.backgroundColor='rgb(77, 88, 74)';
}
function ToForm1(){
    form2.style.left='500px';
    form1.style.left='70px';
    form3.style.left='1000px';
    dos.style.border='1.5px solid black';
    dos.style.backgroundColor='white';
    line1.style.backgroundColor='black';
    dos.style.color='black';
    tres.style.border='1.5px solid black';
    tres.style.backgroundColor='white';
    tres.style.color='black';
    line2.style.backgroundColor='black';
}