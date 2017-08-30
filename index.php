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
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="favicon.ico">
  <link rel="icon" type="image/gif" href="animated_favicon1.gif">
  <link href="css/fonts.css" rel="stylesheet" type="text/css"/>
  <link href="css/style.css" rel="stylesheet" type="text/css"/>
  <link href="css/media.css" rel="stylesheet" type="text/css"/>
  <script type="text/javascript" src="js/cssrefresh.js"></script>
  <title>Super SHOP - Главная</title>
</head>
<body>
  <div class="wrapper">
    <div class="bgtext">SUPER&nbsp;SHOP</div>
   <header>
    <?php require 'header.php'; ?>
    <div id="promo">
      <div id="promotext">
       <span id="nameprom">НАЗВАНИЕ</span><br>
       <span id="typeprom">ПРОМО-ТОВАРА</span><br>
       <span id="noteprom">Описание промо-товара</span>
      </div>
      <a id="BtnShowPromo" href="#">
        Посмотреть +
      </a>
     </div>
   </header>
   <div class="slider">
     <div class="item item-1"><a href="#"><span class="slidername">ЗАГОЛОВОК<span class="sliderdisc"></br>ПРОМО-ТОВАРА</span></span></a></div>
     <div class="item item-2"><a href="#"><span class="slidername">ЗАГОЛОВОК<span class="sliderdisc"></br>ПРОМО-ТОВАРА</span></span></a></div>
     <div class="item item-3"><a href="#"><span class="slidername">ЗАГОЛОВОК<span class="sliderdisc"></br>ПРОМО-ТОВАРА</span></span></a></div>
   </div>
   <div class="popularitemsblock">
     <div class="headpopularitems">
       <div class="popularitemsname">Популярные товары</div>
       <div class="nav">
         <img src="../images/arrowLeft.png" alt="left">&nbsp
         <img src="../images/arrowRight.png" alt="right">
       </div>
     </div>
     <div class="line">
         <div class="product product-1">
           <div id="productname">Самокат<span id="Summ">4900<span id="productrub">руб.</span></span></div>
         </div>
         <div class="product product-2">
           <div id="productname">Боард<span id="Summ">9900<span id="productrub">руб.</span></span></div>
         </div>
         <div class="product product-3">
           <div id="productname">Велосипед<span id="Summ">19900<span id="productrub">руб.</span></span></div>
         </div>
         <div class="product product-4">
           <div id="productname">Роллики<span id="Summ">14900<span id="productrub">руб.</span></span></div>
         </div>
         <div class="product product-5">
           <div id="productname">Вейкборд<span id="Summ">11900<span id="productrub">руб.</span></span></div>
         </div>
         <div class="product product-6">
           <div id="productname">Скейт<span id="Summ">3990<span id="productrub">руб.</span></span></div>
         </div>
     </div>
   </div>
     <div class="aboutus">
       <div class="aboutusname">
        О магазине
      </div>
      <div class="history">
        Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.<br><br>
        Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapi-
      </div>
    </div>
   <?php require 'footer.php'; ?>
 </div>
</body>
</html>
