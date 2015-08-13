<?php

$host="localhost";
$user="root" ;
$pass="";
$banco="bd_cadlivro";
$con = mysql_connect($host,$user,$pass) or die("Não foi possível conectar!".mysql_error());
mysql_select_db($banco,$con) or die(mysql_error());
	?>