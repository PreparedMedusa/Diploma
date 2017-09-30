<?php
session_start();
$dbconn=pg_connect("host=localhost port=5432 dbname=mypgsql user=postgres password=mysql");
if ($dbconn===false)
{
  echo "Не удаётся открыть БД!<br>";
  exit(0);
}
if ($_POST['registr']=="Зарегистрироваться")
{
  $str="select * from users_sshop where email = '".$_POST['Email']."';";
  $x=pg_query($dbconn,$str);
  $y=pg_fetch_all($x);
  if ($y===false)
  {
    pg_query($dbconn, "insert into users_sshop (email,pass,name) values
    ('".$_POST['Email']."','".$_POST['Pass']."','".$_POST['Name']."');");

    $reg=1;
  }
  else
  {
    echo "<h2>Пользователь с данным Email уже зарегистрирован!</h2>";
  }
}
/*Создание таблицы юзеров*/
/*pg_query($dbconn, "create table users_sshop(id serial, email varchar, pass varchar, name varchar)");*/
/*Создание таблицы товаров*/
/*pg_query($dbconn, "create table wakeboards(id serial, name varchar, discription varchar, colors varchar, price varchar)");*/
/*Импорт базы из csv*/
/*pg_query($dbconn, "copy wakeboards(id,name,discription,colors,price) FROM 'C:\OpenServer\domains\Diploma\data\wakeboards.csv' WITH DELIMITER ';' CSV");*/
?>
<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="utf-8">
  <link rel="shortcut icon" href="favicon.ico">
  <link rel="icon" type="image/gif" href="animated_favicon1.gif">
  <link href="css/fonts.css" rel="stylesheet" type="text/css"/>
  <link href="css/style.css" rel="stylesheet" type="text/css"/>
  <link href="css/regist_style.css" rel="stylesheet" type="text/css"/>
  <title>Super SHOP - Регистрация</title>
</head>
<body>
 <div class="wrapper">
   <header>
    <?php require 'header.php';
    echo "</header>";
  if ($reg==1){
    echo "<h1>Регистрация прошла успешно!</h1>";
  }
  else{
    echo "
    <h1>РЕГИСТРАЦИЯ</h1>
    <div class='registrcard'>
      <form action='' method='post'>
        <div class='side'>
          <h3>Контактное лицо (ФИО):</h3>
          <input type='text' name='Name' class='input'>
          <h3>E-mail адрес</h3>
          <input type='email' name='Email' class='input' placeholder='Введите ваш Email' required>
        </div>
        <div class='side'>
          <h3>Пароль</h3>
          <input type='password' name='Pass' class='input' required>
          <h3>Повторите пароль</h3>
          <input type='password' name='PassRep' class='input' required>
        </div>
        <input type='submit' class='regbtn' name='registr' value='Зарегистрироваться'>
      </form>
    </div>
    ";
  }
  require 'footer.php'; ?>
 </div>
</body>
</html>
