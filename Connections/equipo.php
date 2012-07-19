<?php
# FileName="Connection_php_mysql.htm"
# Type="MYSQL"
# HTTP="true"
$hostname_equipo = "localhost";
$database_equipo = "pabloprada";
$username_equipo = "root";
$password_equipo = "";
$equipo = mysql_pconnect($hostname_equipo, $username_equipo, $password_equipo) or trigger_error(mysql_error(),E_USER_ERROR); 
?>