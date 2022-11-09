<?php
$servername = "db.inf.uct.cl";
$username = "A2022_nvalenzuela";
$password = "A2022_nvalenzuela";
$dbname = "A2022_nvalenzuela";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$salida = "";
$query ="SELECT * FROM torneo  ORDER BY `id_torn` ASC";
$resultado = $conn->query($query);

if ($resultado->num_rows > 0) {
    $salida .="
    <table>
    <thead>
        <th>id_Torneo</th>
        <th>Nombre torneo</th>
        <th>id Juego</th>
        <th>Cantidad de llaves</th>
        <th>Tipo Torneo</th>
    </thead>
    <tbody>";
    while ($fila = $resultado->fetch_assoc()) {
        $salida .= "<tr>
        <td>" . $fila['id_torn'] . "</td>
        <td>" . $fila['nom_torn'] . "</td>
        <td>" . $fila['id_juego'] . "</td>
        <td>" . $fila['cant_llav'] . "</td>
        <td>" . $fila['tipo_torneo'] . "</td>
        </tr>";
    }
    $salida .= "</tbody></table>";
} else {
    $salida .= "No hay datos";
}
echo $salida;

?>
