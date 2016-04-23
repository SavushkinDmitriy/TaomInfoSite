<?php
function conect_DB() {
	$hostname = "localhost";
	$database = "taom_info";
	$username = "savushkinandrew";
	$password = "savushkinandrew";
	$connect=mysql_connect("$hostname","$username","$password");
	$selectdb=mysql_select_db("$database",$connect) or die ("Error" . mysql_error());
	mysql_query("SET NAMES 'cp1251'");
	mysql_query("SET CHARACTER SET 'cp1251'");
	}
?>