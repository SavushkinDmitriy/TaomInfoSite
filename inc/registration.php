<html>
<body>
<?php
$db=mysql_connect('localhost','savushkinandrew','savushkinandrew');
mysql_select_db('taom_info',$db) or die('��� ������� � ����' . mysql_error());

mysql_query("SET_NAMES 'cp1251'");
mysql_query("SET_CHARACTER SET 'cp1251'");

	$FirstName = trim($_POST[firstname]);
	$Lastname = trim($_POST[lastname]);

$result=mysql_query("INSERT INTO users (name,lastname) VALUES ('$FirstName','$Lastname')");

	if($result == 'true')
	{
		echo "���������� ��������� � ���� ������";
	}
	else
	{
		echo "���������� �� ��������� � ���� ������";
	}
		
?>
</body>
</html>