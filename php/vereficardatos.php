<?php
//creamos conexion
$conn = mysqli_connect("db.inf.uct.cl","A2022_nvalenzuela","A2022_nvalenzuela","A2022_nvalenzuela");
// Comprobamos conexion
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


$salida = true;
//Recimos la informacion
$usuario = $_POST['usuario'];
$correo = $_POST['correo'];
echo $nombre;
//Insertamos la informacion a la base de datos
$sql = "SELECT 'usuario' ,'correo' from perfil_usuario ";
$result = $conn->query($sql);
while ($fila = $resultado->fetch_assoc()) {
    if ($fila['usuario']== $usuario or $fila['correo']==$correo){
        $salida = false ;
    }
}
echo $salida ; 



?>