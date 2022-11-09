<?php

require './cp.php';

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$salida = "";
$query ="SELECT * FROM torneo ";

$resultado = $conn->query($query);
if ($resultado->num_rows > 0) {
    $salida ="
    <table>
    <thead>
        <th>Id Torneo</th>
        <th>Nombre Torneo</th>
        <th>Juego o deporte</th>
        <th>Cantidad de llaves</th>
    </thead>
    <tbody>";
    while ($fila = $resultado->fetch_assoc()) {
        $salida .= "<tr>
        <td>" . $fila['Id_Torneo'] . "</td>
        <td>" . $fila['N_torneo'] . "</td>
        <td>" . $fila['N_jue_dep'] . "</td>
        <td>" . $fila['Cant_llaves'] . "</td>
        </tr>";
    }
    $salida = "</tbody></table>";
} else {
    $salida = "No hay datos";
}
echo $salida;
?>