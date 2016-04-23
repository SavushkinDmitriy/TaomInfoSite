<?php
include "func.inc";
conect_DB();

$sql=mysql_query("SELECT * FROM users WHERE `id_user`='10'");

$row=mysql_fetch_array($sql);

$enter_login = $row['name'];//"login";

$enter_passw = $row['lastname'];//"202cb962ac59075b964b07152d234b70";

print("$enter_login and $enter_passw");

?>