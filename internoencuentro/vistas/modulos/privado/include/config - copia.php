<?php
$mysql_hostname = "localhost";
$mysql_user = "u794066313_fcon";
$mysql_password = "q3>E=r]Q";
$mysql_database = "u794066313_fcontiinmo";
$bd = mysql_connect($mysql_hostname, $mysql_user, $mysql_password) or die("Could not connect database");
mysql_select_db($mysql_database, $bd) or die("Could not select database");

?>