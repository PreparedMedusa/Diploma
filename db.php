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

// Create table of users
//pg_query($dbconn, "create table users_sshop(id serial PRIMARY KEY, email varchar, pass varchar, name varchar, phone varchar, city varchar, street varchar, house varchar, flat varchar, role varchar DEFAULT 0)");
// Create table of items
//pg_query($dbconn, "create table items_sshop(id serial PRIMARY KEY, art smallint, name varchar, discription varchar, category_id smallint, label char(4), img varchar, types varchar, price integer, oldprice integer)");
// Import csv to db
//pg_query($dbconn, "copy items_sshop(id,art,name,discription,category_id,label,img,types,price,oldprice) FROM '/Library/WebServer/Documents/super-shop/Diploma/db/data/items_sshop.csv' WITH DELIMITER ';' HEADER CSV");
// Root to Admin
//pg_query($dbconn, "UPDATE users_sshop SET role=1 WHERE id=1;");

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
function main_items($column, $value){
  global $dbconn;
  $query=pg_query($dbconn,"select id, name, discription, category_id, img, types, price, oldprice from items_sshop where $column = '".$value."';");
  $items=pg_fetch_all($query);
  return $items;
}
function get_category($id){
  global $dbconn;
  $query=pg_query($dbconn,"select * from category where id = $id;");
  $categories=pg_fetch_all($query);
  foreach ($categories as $category){
    return $category['name'];
  }
}
