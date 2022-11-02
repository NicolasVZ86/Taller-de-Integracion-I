<?php

require 'cp.php';

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


$salida = "";
$query ="SELECT id_historial_usuario,nombre_partida,duracion,id_usuario,id_torn,id_partida FROM historial_usuario  ORDER BY `historial_usuario`.`id_historial_usuario` DESC";



$resultado = $conn->query($query);

if ($resultado->num_rows > 0) {
    $salida .="
    <table>
    <thead>
        <th>id_historial_usuario</th>
        <th>nombre_partida</th>
        <th>duracion</th>
        <th>id_usuario</th>
        <th>id_torn</th>
        <th>id_partida</th>
    </thead>
    <tbody>";
    while ($fila = $resultado->fetch_assoc()) {
        $salida .= "<tr>
        <td>" . $fila['id_historial_usuario'] . "</td>
        <td>" . $fila['nombre_partida'] . "</td>
        <td>" . $fila['duracion'] . "</td>
        <td>" . $fila['id_usuario'] . "</td>
        <td>" . $fila['id_torn'] . "</td>
        <td>" . $fila['id_partida'] . "</td>
        </tr>";
    }
    $salida .= "</tbody></table>";
} else {
    $salida .= "No hay datos";
}
echo $salida;
