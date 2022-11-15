<?php
$usuario = $_POST['sesion_username'];
$contrsena = md5($_POST['sesion_password']);
session_start();
$_SESSION['usuario']=$usuario;


//creamos conexion
$conn = mysqli_connect("db.inf.uct.cl","A2022_nvalenzuela","A2022_nvalenzuela","A2022_nvalenzuela");
// Comprobamos conexion
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


$sql = "SELECT usuario , contrasena from perfil_usuario
where usuario = '$usuario' and contrasena = '$contrsena'";


$ss = "sesion iniciada";
$sn = "contrasena o usuario no encontrados";



$resultado = mysqli_query($conn,$sql);

$filas = mysqli_num_rows($resultado);

$salida = array("status" => "");


if($filas){
    $salida['status']=$ss;
}else{
    $salida['status']=$sn;
}
exit (json_encode($salida));