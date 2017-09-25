<?php
session_start();
if ($_POST['out']=="Выйти")
  {
    unset($_SESSION['log']);
    header('Location: ../index.php');
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="css/fonts.css" rel="stylesheet" type="text/css" />
  <link href="css/style.css" rel="stylesheet" type="text/css" />
  <link href="css/media.css" rel="stylesheet" type="text/css" />
  <script type="text/javascript" src="js/cssrefresh.js"></script>
  <title>Админ-панель</title>
</head>
<body>
  <div class="wrapper">
    <div class="menu-wrapper">
      <img src="images/label.jpg" alt="">
      <ul class="menu">
        <li class="menu-item">
          <a href="">
            <img src="images/orders.png" alt="">заказы
          </a>
        </li>
        <li class="menu-item">
          <a href="">
            <img src="images/users.png" alt="">пользователи
          </a>
        </li>
        <li class="menu-item">
          <a href="">
            <img src="images/items.png" alt="">товары
          </a>
        </li>
        <li class="menu-item">
          <a href="">
            <img src="images/categories.png" alt="">категории
          </a>
        </li>
      </ul>
    </div>
    <div class="content">ЗАКАЗЫ</div>
  </div>
</body>
</html>
