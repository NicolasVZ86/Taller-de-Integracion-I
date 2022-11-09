<?php
$servername = "db.inf.uct.cl";
$username = "A2022_nvalenzuela";
$password = "A2022_nvalenzuela";
$dbname = "A2022_nvalenzuela";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$nombreTorneo=$_POST['nombreTorneo'];
$selectGame=$_POST['selectGame'];
$selectLlaves=$_POST['selectLlaves'];
$Modjuego=$_POST['Modjuego'];


echo "Hola ".$nombreTorneo." ".$selectGame." ".$selectLlaves." ".$Modjuego;

?>