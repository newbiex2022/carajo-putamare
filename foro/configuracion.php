<?php
$bd_host = "localhost";
$bd_usuario = "usuario";
$bd_password = "contrase�a";
$bd_base = "prueba";

$con = mysql_connect($bd_host, $bd_usuario, $bd_password);
mysql_select_db($bd_base, $con);
?>