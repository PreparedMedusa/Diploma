<?php
session_start();
if ($_POST['out']=="Выйти")
  {
    unset($_SESSION['log']);
  }
?>
  <!DOCTYPE html>
  <html lang="ru">

  <head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" href="favicon.ico">
    <link rel="icon" type="image/gif" href="animated_favicon1.gif">
    <link href="css/fonts.css" rel="stylesheet" type="text/css" />
    <link href="css/style.css" rel="stylesheet" type="text/css" />
    <link href="css/account_style.css" rel="stylesheet" type="text/css" />
    <title>Super SHOP - Кабинет</title>
  </head>

  <body>
    <div class="wrapper">
      <header>
       <?php require 'header.php'; ?>
      </header>
      <h1>ЛИЧНЫЙ КАБИНЕТ</h1>
      <div class="accountcard">
        <div class="infoside">
          <form action="" method="post">
            <h2>Ваши данные</h2>
            <h3>Контактное лицо (ФИО):</h3>
            <input type='text' name='Name' class='input'>
            <h3>Контактный телефон</h3>
            <input type='text' name='Phnamber' class='input'>
            <h3>E-mail адрес:</h3>
            <input type='email' name='Email' class='input' required>
            <h2>Адрес доставки</h2>
            <h3>Город:</h3>
            <input type='text' name='City' class='input'>
            <h3>Улица:</h3>
            <input type='text' name='Street' class='input'>
            <div class="adress">
              <div>
                <h3>Дом:</h3>
                <input type='text' name='House' class='input'>
              </div>
              <div>
                <h3>Квартира:</h3>
                <input type='text' name='Flat' class='input'>
              </div>
            </div>
            <h2>Изменение пароля</h2>
            <h3>Введите новый пароль:</h3>
            <input type='password' name='NewPass' class='input'>
            <h3>Повторите новый пароль:</h3>
            <input type='password' name='PassRep' class='input'>
            <input type="submit" name="submit" class="savebtn" value="Сохранить">
          </form>
        </div>
        <div class="orderside">
          <h2>Ваши заказы</h2><br>
          <div class="orderlist">
            <div class="order">
              <div>
                <h1>№4653</h1>
                <h2>(45 468руб.)</h2>
                <h3>01.01.2015 в 15:54</h3>
              </div>
              <div class="status">Ожидает доставки</div>
            </div>
          </div>
        </div>
      </div>
      <?php require 'footer.php'; ?>
    </div>
  </body>

  </html>
