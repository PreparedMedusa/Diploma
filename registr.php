<?php require 'db.php'; ?>
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
