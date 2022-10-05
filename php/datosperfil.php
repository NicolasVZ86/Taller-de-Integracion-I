<?php
echo "<h1>hola</h1>"
$inc = include("conec.php")
echo "<h1>hola</h1>"
if($inc){
    $consulta = "SELECT * FROM 'perfil-usuario'";
    $resultado = mysqli_query($conex,$consulta);
    if ($resultado){
        while($row = $resultado->fetch_array()){
            $id = $row['nombre']
            ?>
            <div>
                <h3><?php echo $id?></h3>
            </div>
            <?php
        }
    }
}else{
    echo "no se pudo conectar"
}


echo "<h1>hola</h1>"

?>