<?php header ("Content-type: text/html; charset=utf-8");?>
<!DOCTYPE HTML PUBLIC \"-//W3C//DTD HTML 4.0 Transitional//EN\">
<HTML>
<head>
<title>Переменные1</title>

</head>

<body>


   <?php 
 $host="127.0.0.1";

$user="root";

$password="39655844";

$db="progforse";

mysql_connect($host, $user, $password) or die("MySQL сервер недоступен!".mysql_error());

mysql_select_db($db) or die("Нет соединения с БД".mysql_error());
  
  $s=$_POST['Кнопка'];

  
  
  switch ($s) {
    case "Отправить":
        $s1 =$_POST['FIO'];
  
 $s=mysql_query("INSERT INTO sotrudniki(FIO) VALUES ('$s1')");  
  echo("<script>location.href='index.php' </script>");
        break;
    case "Обновить":
        	$s2 =$_POST['FIO'];
	$s3 =$_POST['id'];

  	$s=mysql_query("UPDATE sotrudniki SET FIO=('$s2') WHERE id=('$s3')");
  	  echo("<script>location.href='index.php' </script>");
        break;
    case "Удалить":
        $s4 =$_POST['id'];
  
 $s=mysql_query("DELETE FROM sotrudniki where id=('$s4')"); 
   echo("<script>location.href='index.php' </script>");
        break;
}
  
  
  
  ?> 


</body>
</HTML>