<?php
include_once("conec.php");
if($conex){
    $consulta = "SELECT * FROM historial_usuario";
    $resultado = mysqli_query($conex,$consulta);
    if ($resultado){?>
        <TABLE BORDER>
        <TR>
        <TH>nombre-partida</TH> <TH>duracion</TH> <TH>id-partida</TH>
        </TR>
        <?php
        while($row = $resultado->fetch_array()){
            $id = $row['id-partida'];
            $nombre = $row['nombre-partida'];
            $duracion = $row['duracion'];
            ?>
                    <TR>
                        <TD><?php echo $nombre;?></TD> <TD><?php echo $duracion;?></TD> <TD><?php echo $id;?></TD>
        </TR>
            <?php
        }?>
        </TABLE>
        <?php
    }
}else{
    echo "<h1>no se pudo conectar</h1>";
}
echo "<h1>hola</h1>";

?>