<?php 
session_start();
if (isset($_SESSION['usuario'])){
    echo "<button onclick='cerses()' id='botlog'> cerrar sesion </button>";
}
