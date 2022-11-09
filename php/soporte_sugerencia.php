<?php
	//conexion con la base de datos y el servidor.
$bd = mysqli_connect("db.inf.uct.cl","A2022_nvalenzuela","A2022_nvalenzuela","A2022_nvalenzuela");
if(!$bd) echo "Error de conexion";
	
	//obtenemos los valores del formulario.
$sugerencia = $_POST['sugerencia'];


$respuesta = mysqli_query($bd,"CALL insertar_sugerencia('$sugerencia')");


if($respuesta){
echo "<script> alert('Correcto!');
location.href='../html/Soporte.html';
</script>";

}else{
echo "<script> alert('Incorrecto!');
location.href='../html/Soporte.html';
</script>";
}
?>
