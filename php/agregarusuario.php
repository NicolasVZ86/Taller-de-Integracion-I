<?php
//creamos conexion
$conn = mysqli_connect("db.inf.uct.cl","A2022_nvalenzuela","A2022_nvalenzuela","A2022_nvalenzuela");
// Comprobamos conexion
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
//Recimos la informacion

$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$usuario = $_POST['usuario'];
$correo = $_POST['correo'];
$contra = password_hash($_POST['contrasena'],PASSWORD_BCRYPT);
$fecha = $_POST['fecha'];
$carrera = $_POST['carrera'];
echo $nombre;
//Insertamos la informacion a la base de datos
$sql = "INSERT INTO perfil_usuario(nombre,apellido,usuario,correo,fecha_nacimiento,carrera,contrasena)
    VALUES ('$nombre','$apellido','$usuario','$correo','$fecha','$carrera','$contra')";
$result = $conn->query($sql);

?>