<?php
    $servername = "localhost";
    $database = "Torneos";
    $username = "root";
    $password = "";
    $conn = mysqli_connect($servername, $username, $password, $database);
    if ($conn -> connect_errno)
    {
        die("Fallo la conexion:(".$conn -> mysqli_connect_errno().")".$conn-> mysqli_connect_error());
    }
    $where="";
    $nombre=$_POST['xName'];
    $juego=$_POST['xJuego'];
    $llaves=$_POST['xLlaves'];

    if (isset($_POST['buscar']))
    {
	    if (empty($_POST['Juego']))
	    {
		    $where="where N_torneo like '".$nombre."%'";
	    }

	    else if (empty($_POST['Nombre']))
	    {
		    $where="where N_jue_dep='".$juego."'";
	    }

	    else
	    {
		    $where="where N_torneo like '".$nombre."%' and N_jue_dep='".$juego."'";
	    }
    }
    // $torneos="SELECT * FROM Torneos $where";
    // $resJuegos=$conn->query($torneos);
    // $resllaves=$conn->query($torneos);
    // if(mysqli_num_rows($resJuegos)==0)
    // {
	// $mensaje="<h1>No hay registros que coincidan con su criterio de búsqueda.</h1>";
    // }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Torneos</title>
    <link rel="stylesheet" href="../css/estiloheader.css">
    <link rel="stylesheet" href="../css/style_footer.css">
    <link rel="stylesheet" href="../css/estilo_torneos.css">
    <script src="https://kit.fontawesome.com/eb496ab1a0.js" crossorigin="anonymous"></script>
</head>
<body>
    <header>
        <div id="header">
			<ul class="nav">
				<li><a href="../html/Home.html">Inicio</a></li>
				<li><a href="../html/Torneos.html">Torneos</a>
					<ul>
						<li><a href="../html/crearTorneo.html">Creacion de torneos</a></li>
						<li><a href="../html/Torneos.html">Torneos disponibles</a></li>
					</ul>
				</li>
                <li><a href="../html/PagBusEquipo.html">Equipos</a>
					<ul>
						<li><a href="../html/forRegEqui.html">Creacion de Equipos</a></li>
						<li><a href="../html/PagBusEquipo.html">Busqueda de equipo</a></li>
					</ul>
				</li>
				<li><a href="../html/Soporte.html">Soporte</a></li>
                <li><a href="../html/Perfil.html">Perfil</a>
                    <ul>
                        <li><a href="../html/registroYlogin.html">Login y Registro</a></li>
                    </ul>
                </li>
                <li><a href="../html/quienes_somos.html">Quienes somos</a></li>
			</ul>
		</div>
    </header>
    <main>
        <section class="buscador">
            <div class="filtro">
                <form method="post">
                    <input type="text" placeholder="Nombre..." class="xnombre" name="xName">
                    <select class="xjuego" name="xGames">
                        <option value="">Juego o deporte</option>
                        <?
						while ($resJuegos = $resCarreras->fetch_array(MYSQLI_BOTH))
						{
							echo '<option value="'.$resJuegos['N_jue_dep'].'">'.$resJuegos['N_jue_dep'].'</option>';
                        }
                        ?>
                    </select>
                    <select class="xllaves" name="xKeys">
                    <option value="">Llaves</option>
					<?
						while ($resllaves = $resCarreras->fetch_array(MYSQLI_BOTH))
						{
							echo '<option value="'.$resllaves['Cant_llaves'].'">'.$resllaves['Cant_llaves'].'</option>';
						}
					?>
                    </select>
                    <button class="buscar" type="submit">Buscar</button>
                </form>
            </div>
            <div class="tourn">
                <table class="tabla">
                    <tr>
                        <th>Id Torneo</th>
                        <th>Nombre Torneo</th>
                        <th>Juego o deporte</th>
                        <th>Cantidad de llaves</th>
                    </tr>
                    <!-- Cmabio en php -->
                    <?php
                    $sql="SELECT * from torneo";
                    $result=mysqli_query($conn,$sql);

                    while($mostrar=mysqli_fetch_array($result)){
                        ?>
                    <tr>
                        <td><?php echo $mostrar['Id_Torneo']?></td>
                        <td><?php echo $mostrar['N_torneo']?></td>
                        <td><?php echo $mostrar['N_jue_dep']?></td>
                        <td><?php echo $mostrar['Cant_llaves']?></td>
                    </tr>
                <?php
                }
                ?>
                </table>
            </div>
        </section>
        
    </main>
    <footer class="pie-pagina">
        <div class="grupo-1">
            <div class="box">
                <h2>SOBRE NOSOTROS</h2>
                <p></p>
                <p></p>
            </div>
            <div class="box">
                <h2>SIGUENOS</h2>
                <div class="red-social">
                    
                    <a href="#" class="fa fa-facebook"></a>
                    <a href="#" class="icon icon-discord"></a>
                    <a href="#" class="fa fa-instagram"></a>
                    <a href="#" class="fa fa-twitter"></a>
                    <a href="#" class="fa fa-youtube"></a>
                </div>
            </div>
        </div>
        <div class="grupo-2">
            <small>&copy; 2022 <b>Torneos UCT</b> - Todos los Derechos Reservados.</small>
        </div>
    </footer>
</body>
</html>