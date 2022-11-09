<?php
$servername = "db.inf.uct.cl";
$username = "A2022_nvalenzuela";
$password = "A2022_nvalenzuela";
$dbname = "A2022_nvalenzuela";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$nombreTorneo=$_POST['nom'];
$selectGame=$_POST['game'];
$selectLlaves=$_POST['llaves'];
$Modjuego=$_POST['Modo_juego'];
$dateTorneo=$_POST['fecha'];

echo "Hola ".$nombreTorneo." ".$selectGame." ".$selectLlaves." ".$Modjuego."            ".$dateTorneo;

$query ="INSERT INTO torneo(
    nom_torn,
    id_juego,
    cant_llav,
    tipo_torneo
) VALUES ('$nombreTorneo',$selectGame,$selectLlaves,'$Modjuego')";
if($conn->query($query)===true){
    echo "".$nombreTorneo." ".$selectGame." ".$selectLlaves." ".$Modjuego." ".$dateTorneo;
}else{
    die("Error al insertar datos: " . $conn->error);
}

$conn->close();


?>