<?php

$hostname = "localhost";
	$database = "taom_info";
	$username = "savushkinandrew";
	$password = "savushkinandrew";
	$connect=mysql_connect("$hostname","$username","$password");
	$selectdb=mysql_select_db("$database",$connect) or die ("Error" . mysql_error());
	mysql_query("SET NAMES 'cp1251'");
	mysql_query("SET CHARACTER SET 'cp1251'");

$sql=mysql_query("SELECT * FROM users WHERE `id_user`='10'");
$row=mysql_fetch_array($sql)or die ('<b>Ошибка запроса:</b>' . mysql_error());
$enter_login = $row['name'];

$enter_passw = $row['password'];

$err = '';

if (isset($_POST['login']) && isset($_POST['passw'])) {

   //$_POST['passw'] = md5($_POST['passw']);

   if ($_POST['login']===$enter_login && 

      $_POST['passw']===$enter_passw) {

      session_start();

      $_SESSION['sess_login'] = $_POST['login'];

      $_SESSION['sess_pass'] = $_POST['passw'];

      header('Location: secondPage.html');

      exit();

   }

   else {

      $err = '<span style="color: red"><b>';

      $err .= 'Логин или пароль введены неправильно!';

      $err .= '</b></span><br>';

   }

}

?>
<title>Фирма</title><br><br>
<meta charset="windows-1251">
<link rel="stylesheet" type="text/css" href="style.css">
<body>

<form action="index.php" method="POST">

 <div align="center" style="padding: 100px 0 0 0">

  <table border="0" cellspacing="0" width="200">

   <caption><h9>Вход в систему</h9><br><br><br></caption>

   <tr><td align="right"><h9>Логин:</h9><br></td>

   <td><input type="text" size="30" maxlength="30" name="login"></td><br><br></tr>

   <tr><td align="right"><br><br><h9>Пароль:</h9></td>

   <td><br><br><input type="password" size="30" maxlength="30" name="passw"></td></tr>

   <tr><td align="center" colspan="2"><br><br>

    <input type="submit" value="Войти" class="b2">

  </td></tr></table>

  <?php echo $err; ?>

 </div>

</form>

</body>

