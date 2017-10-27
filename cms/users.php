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
  <link rel="shortcut icon" href="favicon.ico">
  <link href="css/fonts.css" rel="stylesheet" type="text/css" />
  <link href="css/style.css" rel="stylesheet" type="text/css" />
  <link href="css/users_style.css" rel="stylesheet" type="text/css" />
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
          <a href="index.php">
            <img src="images/orders.png" alt="">заказы
          </a>
        </li>
        <li class="users">
          <a href="users.php">
            <img src="images/usersGreen.png" alt="">пользователи
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
      <h1>ПОЛЬЗОВАТЕЛИ</h1>
      <table>
        <tr>
          <th>имя</th>
          <th>e-mail</th>
          <th>телефон</th>
        </tr>
        <tbody>
        <tr class="row">
          <td class="item_1">
            Олег Шарапа
          </td>
          <td class="item_2">
            slipknot666_666@mail.ru
          </td>
          <td class="item_4">
            +7 919 746 74 86
          </td>
          <td class="item_5">
            <a href="">
              просмотр
            </a>
          </td>
        </tr>
        <?php
        $dbconn=pg_connect("host=localhost port=5432 dbname=mypgsql user=postgres password=mysql") or die('Нет соединения с сервером PostgreSQL: ' . pg_last_error());
        $result_users = pg_query($dbconn, "SELECT * FROM users_sshop LIMIT 30") or die('Ошибка запроса поиска записи: ' . pg_last_error());
        $array_users = pg_fetch_all($result_users);
        foreach ($array_users as $key => $value) {
          echo "<tr class='row'>";
            echo "<td>";
              echo $value['name'];
            echo "</td>";
            echo "<td>";
              echo $value['email'];
            echo "</td>";
            echo "<td>";
              echo $value['phone#'];
            echo "</td>";
            echo "<td>";
              echo "<a href=''>просмотр</a>";
            echo "</td>";
          echo "<tr>";
        }
        ?>
      </tbody>
      </table>
    </div>
  </div>
</body>
</html>
