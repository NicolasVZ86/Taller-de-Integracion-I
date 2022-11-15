<?php
session_start();
$salida = array("usuario" => "");
$salida['usuario']=$_SESSION['usuario'];
exit (json_encode($salida));