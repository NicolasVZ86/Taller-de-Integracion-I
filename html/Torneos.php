<?php
    $servername = "localhost";
    $database = "Torneos";
    $username = "root";
    $password = "";
    $conn = new mysqli($servername, $username, $password, $database);
    if ($conn -> connect_errno)
    {
        die("Fallo la conexion:(".$conn -> mysqli_connect_errno().")".$conn-> mysqli_connect_error());
    }
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
                <form name="Filtro" method="POST" action="Torneos.php">
                    <input name='N_torneo' id="xName"type="text" placeholder="Nombre..." class="xnombre" value="<?php echo $_POST['N_torneo']?>">
                </form>
            </div>
                <div class="fil">
                    <table class="tabla2">
                        <tr>
                            <th>
                                Juego
                                <select name="N_jue_dep" id="xJuego">
                                    <?php if ($_POST["N_jue_dep"] != '')?>
                                    <option value="<?phpecho $_POST["N_jue_dep"]?>"><?php echo $_POST["N_jue_dep"]?></option>
                                    <option value="">Todos</option>
                                    <option value="Counter Strike: Global Offensive">CS:GO</option>
                                    <option value="Rocket League">Rocket League</option>
                                    <option value="League of legends">League of Legends</option>
                                </select>
                            </th>
                            
                            <th>
                                LLaves
                                <select name="Cant_llaves" id="xLlaves">
                                    <?php if ($_POST["Cant_llaves"] != '')?>
                                    <option value="<?php echo $_POST["Cant_llaves"]?>"><?php echo $_POST["Cant_llaves"]?></option>
                                    <option value="">Todas</option>
                                    <option value="16">16</option>
                                    <option value="8">8</option>
                                    <option value="4">4</option>
                                </select>
                            </th>
                        </tr>
                    </table>
                </div>
                <div>
                    <input type="submit" class="btn btn-success" value="Ver">
                </div>
                <?php
                if ($_POST["N_torneo"] == '' AND $_POST["N_jue_dep"] == 'Todos' AND $_POST["Cant_llaves"] == 'Todas'){ $filtro='';} else{
                if ($_POST["N_torneo"] != '' AND $_POST["N_jue_dep"] == 'Todos' AND $_POST["Cant_llaves"] == 'Todas'){ $filtro="WHERE N_torneo= '".$_POST["N_torneo"]."'";}}
                if ($_POST["N_torneo"] == '' AND $_POST["N_jue_dep"] != 'Todos' AND $_POST["Cant_llaves"] == 'Todas'){ $filtro="WHERE N_torneo= '".$_POST["N_torneo"]."' AND N_jue_dep='".$_POST["N_jue_dep"]."'";}
                if ($_POST["N_torneo"] != '' AND $_POST["N_jue_dep"] != 'Todos' AND $_POST["Cant_llaves"] == 'Todas'){ $filtro="WHERE N_torneo= '".$_POST["N_torneo"]."' AND N_jue_dep='".$_POST["N_jue_dep"]."'";}
                if ($_POST["N_torneo"] == '' AND $_POST["N_jue_dep"] == 'Todos' AND $_POST["Cant_llaves"] != 'Todas'){ $filtro="WHERE N_torneo= '".$_POST["N_torneo"]."' AND N_jue_dep='".$_POST["N_jue_dep"]."' AND Cant_llaves='".$_POST["Cant_llaves"]."'";}
                if ($_POST["N_torneo"] == '' AND $_POST["N_jue_dep"] != 'Todos' AND $_POST["Cant_llaves"] != 'Todas'){ $filtro="WHERE N_torneo= '".$_POST["N_torneo"]."' AND N_jue_dep='".$_POST["N_jue_dep"]."' AND Cant_llaves='".$_POST["Cant_llaves"]."'";}
                if ($_POST["N_torneo"] != '' AND $_POST["N_jue_dep"] != 'Todos' AND $_POST["Cant_llaves"] != 'Todas'){ $filtro="WHERE N_torneo= '".$_POST["N_torneo"]."' AND N_jue_dep='".$_POST["N_jue_dep"]."' AND Cant_llaves='".$_POST["Cant_llaves"]."'";}

                $sql=mysqli_query("SELECT * FROM torneo $filtro")
                ?>
            <div class="tourn">
                <table class="tabla">
                    <tr>
                        <th>Id Torneo</th>
                        <th>Nombre Torneo</th>
                        <th>Juego o deporte</th>
                        <th>Cantidad de llaves</th>
                    </tr>
                    <?php 
                        while($arrow=mysqli_fetch_assoc($sql)){
                    ?>
                    <tr>
                        <td><?php echo $arrow['Id_Torneo']?></td>
                        <td><?php echo $arrow['N_torneo']?></td>
                        <td><?php echo $arrow['N_jue_dep']?></td>
                        <td><?php echo $arrow['Cant_llaves']?></td>
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