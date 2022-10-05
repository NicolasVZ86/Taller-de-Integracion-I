<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil</title>
    <link rel="stylesheet" href="../css/estiloheader.css">
    <link rel="stylesheet" href="../css/style_footer.css">
    <link rel="stylesheet" href="../css/Style_Perfil.css">
    <link rel="stylesheet" href="../css/estiloheader.css">
    <script src="https://kit.fontawesome.com/eb496ab1a0.js" crossorigin="anonymous"></script>
</head>
<body class="link_1">
    <header>
        <div id="logo">
            <img src="../imagenes/gamer.webp" alt="no ta">
            <button id="modoos" onclick="hola()">Modo Claro</button>
            <h1>Torneos UCT</h1>
        </div>
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
                <li><a href="../html/Perfil.php">Perfil</a>
                    <ul>
                        <li><a href="../html/registroYlogin.html">Login y Registro</a></li>
                    </ul>
                </li>
                <li><a href="../html/quienes_somos.html">Quienes somos</a></li>
			</ul>
		</div>
    </header>
    <main>
        <section class="perfil_section">
            <div class="perfil_header">
                <div class="perfil_portada">
                    <div class="perfil_avatar">
                        <img src="../images/Sin título.png" alt="avatar">
                        <button type="button" class="boton_avatar">
                            <i class="far fa-image"></i>
                            cambiar imagen
                        </button>
                    </div>
                    <button type="button" class="boton_portada">
                        <i class="far fa-image"></i> Cambiar fondo
                    </button>
                </div>
                
            </div>
            <div class="usuario_cuerpo">
                <div class="descripcion">
                    <h3>Nombre usuario</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                </div>
                
            </div>
            <!-- Todos los datos se cambiaran por un form en php -->
            <div class="usuario_pie">
                <h2>Historial</h2>
                <div id="historial">
                    <?php
                    include("/php/datosperfil.php")
                    ?>
                </div>
            </div>
        </section>
    </main>
    <footer class="pie-pagina">
        <div class="grupo-1">
            <div class="box">
                <figure>
                    <a href="#">
                        <img src="../imagenes/clash.jpg" alt="anashei">
                    </a>
                </figure>
            </div>
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
<script src="../java/header.js"></script>
</html>