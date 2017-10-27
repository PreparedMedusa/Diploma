<?php
session_start();
if ($_POST['out']=="выйти")
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
  <link rel="shortcut icon" href="favicon.ico">
  <link href="css/fonts.css" rel="stylesheet" type="text/css" />
  <link href="css/style.css" rel="stylesheet" type="text/css" />
  <link href="css/media.css" rel="stylesheet" type="text/css" />
  <title>Админ-панель</title>
</head>
<body>
  <div class="wrapper">
    <div class="menu-wrapper">
      <a href="index.php">
        <img src="images/label.jpg" alt="">
      </a>
      <ul class="menu">
        <li class="orders">
          <a href="#">
            <img src="images/ordersGreen.png" alt="">заказы
          </a>
        </li>
        <li class="users">
          <a href="users.php">
            <img src="images/users.png" alt="">пользователи
          </a>
        </li>
        <li class="items">
          <a href="">
            <img src="images/items.png" alt="">товары
          </a>
        </li>
        <li class="categories">
          <a href="">
            <img src="images/categories.png" alt="">категории
          </a>
        </li>
      </ul>
      <div class="menu-login">
        <?php echo $_SESSION['log']; ?>
        <form action='index.php' method='post'>
          <input type=submit name='out' class='logoutbtn' value='выйти'>
        </form>
      </div>
    </div>
    <div class="content">
      <h1>ЗАКАЗЫ</h1>
      <table>
        <tr>
          <th>номер заказа</th>
          <th>статус</th>
          <th>сумма</th>
          <th colspan="2">время заказа</th>
        </tr>
        <tbody>
        <tr class="row">
          <td class="item_1">
            <span>№4831</span>
            <span>от</span>
            <span>slipknot666_666@mail.ru</span>
          </td>
          <td class="item_2">
            <select>
              <option value="1">принят</option>
              <option value="2">отгружен</option>
              <option value="3">у курьера</option>
              <option value="4">доставлен</option>
              <option value="5">отмена</option>
            </select>
          </td>
          <td class="item_3">
            48 597 руб.
          </td>
          <td class="item_4">
            25.09.2017 в 02:35
          </td>
          <td class="item_5">
            <a href="">
              просмотр
            </a>
          </td>
        </tr>
        <tr class="row">
          <td class="item_1">
            <span>№4831</span>
            <span>от</span>
            <span>slipknot666_666@mail.ru</span>
          </td>
          <td class="item_2">
            <select>
              <option value="1">принят</option>
              <option value="2">отгружен</option>
              <option value="3">у курьера</option>
              <option value="4">доставлен</option>
              <option value="5">отмена</option>
            </select>
          </td>
          <td class="item_3">
            48 597 руб.
          </td>
          <td class="item_4">
            25.09.2017 в 02:35
          </td>
          <td class="item_5">
            <a href="">
              просмотр
            </a>
          </td>
        </tr>
        <tr class="row">
          <td class="item_1">
            <span>№4831</span>
            <span>от</span>
            <span>slipknot666_666@mail.ru</span>
          </td>
          <td class="item_2">
            <select>
              <option value="1">принят</option>
              <option value="2">отгружен</option>
              <option value="3">у курьера</option>
              <option value="4">доставлен</option>
              <option value="5">отмена</option>
            </select>
          </td>
          <td class="item_3">
            48 597 руб.
          </td>
          <td class="item_4">
            25.09.2017 в 02:35
          </td>
          <td class="item_5">
            <a href="">
              просмотр
            </a>
          </td>
        </tr>
      </tbody>
      </table>
    </div>
  </div>
</body>
</html>
