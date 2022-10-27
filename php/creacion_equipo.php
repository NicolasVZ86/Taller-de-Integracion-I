<?php
	//conexion con la base de datos y el servidor.
$bd = mysqli_connect("db.inf.uct.cl","A2022_nvalenzuela","A2022_nvalenzuela","A2022_nvalenzuela");
if(!$bd) echo "Error de conexion";
	
	//obtenemos los valores del formulario.
$Nombre_Equipo = $_POST['Nombre_Equipo'];
$email = $_POST['email'];
$Descripcion = $_POST['Descripcion'];
$lema = $_POST['lema'];
$Elejir_juego = $_POST['Elejir_juego'];

$respuesta = mysqli_query($bd,"CALL insertar_registro_equipo('$Nombre_Equipo','$email','$Descripcion','$lema','$Elejir_juego')");



if($respuesta){
echo "<script> alert('correcto');
location.href='../html/forRegEqui.html';
</script>";

}else{
echo "<script> alert('incorrecto');
location.href='../html/forRegEqui.html';
</script>";
}
?>
