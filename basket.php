<?php
session_start();

?>
<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="favicon.ico">
  <link rel="icon" type="image/gif" href="animated_favicon1.gif">
  <link href="css/fonts.css" rel="stylesheet" type="text/css"/>
  <link href="css/style.css" rel="stylesheet" type="text/css"/>
  <link href="css/basket_style.css" rel="stylesheet" type="text/css"/>
  <title>Super SHOP - Корзина</title>
</head>
<body>
  <div class="wrapper">
    <header>
     <?php require 'header.php'; ?>
    </header>
    <h1>КОРЗИНА</h1>
    <div class="ordercard">
      <table>
        <tr>
          <th colspan="2">Товар</th>
          <th>Доступность</th>
          <th>Стоимость</th>
          <th>Количество</th>
          <th>Итого</th>
          <th></th>
        </tr>
        <tr>
          <td class="item_1"><img src="#" alt="Изображение товара" class="imgitem"></td>
          <td class="item_2">Название товара</td>
          <td class="item_3">Есть в наличии</td>
          <td class="item_4">4540руб.</td>
          <td class="item_5"></td>
          <td class="item_6">4540руб.</td>
          <td class="item_7"></td>
        </tr>
        <tr>
          <td class="item_1"><img src="1_1.jpg" alt="Изображение товара" class="imgitem"></td>
          <td class="item_2">Название товара</td>
          <td class="item_3">Есть в наличии</td>
          <td class="item_4">4540руб.</td>
          <td class="item_5"></td>
          <td class="item_6">4540руб.</td>
          <td class="item_7"></td>
        </tr>
      </table>
      <div class="ordercardbottom">
        <a href="index.php" class="backbtn">Вернуться к покупкам</a>
        <div class="total">Итого:<span>73 640руб.</span></div>
        <a href="checkout.php" class="confirmbtn">Оформить заказ</a>
      </div>
    </div>
    <?php require 'footer.php'; ?>
  </div>
</body>
</html>
