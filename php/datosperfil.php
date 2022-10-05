<?php
include_once("conec.php");
if($conex){
    $consulta = "SELECT * FROM perfil-usuario";
    $resultado = mysqli_query($conex,$consulta);
    if ($resultado){
        while($row = $resultado->fetch_array()){
            $id = $row['nombre'];
            ?>
            <div>
                <h3><?php echo "id:".$id;?></h3>
            </div>
            <?php
        }
    }
}else{
    echo "<h1>no se pudo conectar</h1>";
}
echo "<h1>hola</h1>";

?>