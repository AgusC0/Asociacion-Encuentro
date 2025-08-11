<?php
$mysql_hostname = "localhost";
$mysql_user = "u545591534_noticiasasc";
$mysql_password = "C7n1*LR>h";
$mysql_database = "u545591534_noticiasasc";
$bd = mysql_connect($mysql_hostname, $mysql_user, $mysql_password) or die("No se pudo conectar con la base de datos");
mysql_select_db($mysql_database, $bd) or die("No se selecciono la base de datos");

?>