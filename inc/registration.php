<html>
<body>
<?php
$db=mysql_connect('localhost','savushkinandrew','savushkinandrew');
mysql_select_db('taom_info',$db) or die('нет клиента в базе' . mysql_error());

mysql_query("SET_NAMES 'cp1251'");
mysql_query("SET_CHARACTER SET 'cp1251'");

	$FirstName = trim($_POST[firstname]);
	$Lastname = trim($_POST[lastname]);

$result=mysql_query("INSERT INTO users (name,lastname) VALUES ('$FirstName','$Lastname')");

	if($result == 'true')
	{
		echo "Информация добавлена в базу данных";
	}
	else
	{
		echo "Информация не добавлена в базу данных";
	}
		
?>
</body>
</html>