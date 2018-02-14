<?php require 'db.php'; ?>
<!DOCTYPE html>
<html lang="ru">
  <meta charset="utf-8">
  <link rel="shortcut icon" href="favicon.ico">
  <link rel="icon" type="image/gif" href="animated_favicon1.gif">
  <link href="css/fonts.css" rel="stylesheet" type="text/css"/>
  <link href="css/style.css" rel="stylesheet" type="text/css"/>
  <link href="css/login_style.css" rel="stylesheet" type="text/css"/>
  <title>Super SHOP - Вход</title>
</head>
<body>
 <div class="wrapper">
  <header>
   <?php require 'header.php'; ?>
  </header>
  <h1>ВХОД</h1>
  <div class="logincard">
    <div class="enterside">
     <form action="" method="post">
       <h2>Зарегистрированный пользователь</h2>
       <h3>Email адрес:</h3>
       <input type="email" name="Email" class="input" placeholder="Введите ваш Email" required>
       <h3>Пароль:</h3>
       <input type="password" name="Pass" class="input" required>
       <input type="submit" name="submit" class="entbtn" value="Войти">
       <a class="forgotbtn" href="#">Забыли пароль?</a>
     </form>
    </div>
    <div class="registerside">
      <h2>Новый пользователь</h2><br>
      <a class="regbtn" href="registr.php">Зарегистрироваться</a>
    </div>
  </div>
  <?php require 'footer.php'; ?>
 </div>
</body>
</html>
