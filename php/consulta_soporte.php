<?php
	//conexion con la base de datos y el servidor.
$bd = mysqli_connect("db.inf.uct.cl","A2022_nvalenzuela","A2022_nvalenzuela","A2022_nvalenzuela");
if(!$bd) echo "Error de conexion";
	
	//obtenemos los valores del formulario.
$Nombre = $_POST['Nombre'];
$Apellido = $_POST['Apellido'];
$email = $_POST['email'];
$consulta = $_POST['consulta'];


$respuesta = mysqli_query($bd,"CALL insertar_consulta('$Nombre','$Apellido','$email','$consulta')");



if($respuesta){
echo "<script> alert('correcto');
location.href='../html/Soporte.html';
</script>";

}else{
echo "<script> alert('incorrecto');
location.href='../html/Soporte.html';
</script>";
}
?>
