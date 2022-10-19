<?php
$Ntorneo = isset($_POST['xName']) ? $_POST['xName'] : '';
$NJuego = isset($_POST['xJuego']) ? $_POST['xJuego'] : '';
$Nllaves = isset($_POST['xLlaves']) ? $_POST['xLlaves'] : '';

try{
    $conexion = new PDO("mysql:host=localhost;port=3306;dbname=torneos", "root", "");
    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
    $pdo = $conexion->prepare("SELECT * FROM torneo where N_torneo like'".$Ntorneo."%' and N_jue_dep like '".$NJuego."%' and Cant_llaves like '".$Nllaves."%'");

    $pdo->execute() or die(print($pdo->errorInfo()));
    
    echo json_encode('conectado correctamente');

}catch(PDOException $error) {
    echo $error->getMessage();
    die();
}
?>