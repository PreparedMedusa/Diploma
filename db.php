<?php
session_start();
// DB connect
$dbname=mypgsql; //twi2_sql;
$username=postgres; //postgres;
$password=mysql; //330117;
$dbconn=pg_connect("host=localhost dbname=$dbname user=$username password=$password");
if ($dbconn===false)
{
  echo "Не удаётся открыть БД!<br>";
  exit(0);
}
// Login
if ($_POST['submit']=="Войти")
  {
    $x=pg_query($dbconn, "select * from users_sshop where email = '".$_POST['Email']."' and pass = '".$_POST['Pass']."';");
    $y=pg_fetch_all($x);
    if ($y==true)
    {
      $_SESSION['log']=$_POST['Email'];
      foreach ($y as $key => $value)
      {
        if ($value['role']==1)
        {
          header('Location: cms/index.php');
        }
        else
        {
          header('Location: index.php');
        }
      }
    }
    else {
      echo "<h2>Не верная связка Email/Пароль. Попробуйте ещё раз.</h2>";
    }
  }
// Registration
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
// logout
if ($_POST['out']=="Выйти")
  {
    unset($_SESSION['log']);
}
// Создание таблицы юзеров
//pg_query($dbconn, "create table users_sshop(id serial, email varchar, pass varchar, name varchar, phone varchar, city varchar, street varchar, house varchar, flat varchar, role varchar DEFAULT 0)");
// Создание таблицы товаров
//pg_query($dbconn, "create table wakeboards(id serial, name varchar, discription varchar, colors varchar, price varchar)");
// Импорт базы из csv
//pg_query($dbconn, "copy wakeboards(id,name,discription,colors,price) FROM 'C:\OpenServer\domains\Diploma\data\wakeboards.csv' WITH DELIMITER ';' CSV");

function account_profile(){
    global $dbconn;
    $query=pg_query($dbconn, "select * from users_sshop where email = '".$_SESSION['log']."';");
    $profile=pg_fetch_all($query);
    foreach ($profile as $user) {}
    return $user;
}

function account_profile_edit(){
    global $dbconn;
    $query=pg_query($dbconn, "UPDATE users_sshop set
      name='".$_POST['name']."',
      phone='".$_POST['phone']."',
      city='".$_POST['city']."',
      street='".$_POST['street']."',
      house='".$_POST['house']."',
      flat='".$_POST['flat']."',
      pass='".$_POST['newpass']."'
      where email = '".$_SESSION['log']."';");
}
