<?php require 'db.php'; ?>
  <!DOCTYPE html>
  <html lang="ru">

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="favicon.ico">
    <link rel="icon" type="image/gif" href="animated_favicon1.gif">
    <link rel="stylesheet" href="css/swiper.min.css">
    <link href="css/fonts.css" rel="stylesheet" type="text/css" />
    <link href="css/style.css" rel="stylesheet" type="text/css" />
    <link href="css/media.css" rel="stylesheet" type="text/css" />
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
      <div class="newitemsblock">
        <div class="headnewitems">Новые товары
          <div class="swiper-button-prev"></div>
          <div class="swiper-button-next"></div>
        </div>
        <div class="swiper-container">
          <div class="swiper-wrapper">
            <div class="swiper-slide">
              <img src="" alt="Изображение товара">
              <div class="slider-bottom">
                <div class="slide-name"><span>Самокат</div>
                <span class="slide-price">4900<span>руб.</span></span>
                <span class="slide-oldprice"></span>
              </div>
            </div>
            <div class="swiper-slide">
              <img src="1_1.jpg" alt="Изображение товара">
              <div class="slider-bottom">
                <div class="slide-name"><span>Вейкборд Harley LTD 2014</div>
                <span class="slide-price">9900<span>руб.</span></span>
                <span class="slide-oldprice">12990 руб.</span>
              </div>
            </div>
            <div class="swiper-slide">
              <img src="" alt="Изображение товара">
              <div class="slider-bottom">
                <div class="slide-name"><span>Вейкборд Wake park pro</div>
                <span class="slide-price">9900<span>руб.</span></span>
                <span class="slide-oldprice">12990 руб.</span>
              </div>
            </div>
            <div class="swiper-slide">
              <img src="" alt="Изображение товара">
              <div class="slider-bottom">
                <div class="slide-name"><span>Самокат</div>
                <span class="slide-price">4900<span>руб.</span></span>
                <span class="slide-oldprice"></span>
              </div>
            </div>
            <div class="swiper-slide">
              <img src="1_1.jpg" alt="Изображение товара">
              <div class="slider-bottom">
                <div class="slide-name"><span>Вейкборд Harley LTD 2014</div>
                <span class="slide-price">9900<span>руб.</span></span>
                <span class="slide-oldprice">12990 руб.</span>
              </div>
            </div>
            <div class="swiper-slide">
              <img src="" alt="Изображение товара">
              <div class="slider-bottom">
                <div class="slide-name"><span>Вейкборд Wake park pro</div>
                <span class="slide-price">9900<span>руб.</span></span>
                <span class="slide-oldprice">12990 руб.</span>
              </div>
            </div>
            <div class="swiper-slide">
              <img src="" alt="Изображение товара">
              <div class="slider-bottom">
                <div class="slide-name"><span>Самокат</div>
                <span class="slide-price">4900<span>руб.</span></span>
                <span class="slide-oldprice"></span>
              </div>
            </div>
            <div class="swiper-slide">
              <img src="1_1.jpg" alt="Изображение товара">
              <div class="slider-bottom">
                <div class="slide-name"><span>Вейкборд Harley LTD 2014</div>
                <span class="slide-price">9900<span>руб.</span></span>
                <span class="slide-oldprice">12990 руб.</span>
              </div>
            </div>
            <div class="swiper-slide">
              <img src="" alt="Изображение товара">
              <div class="slider-bottom">
                <div class="slide-name"><span>Вейкборд Wake park pro</div>
                <span class="slide-price">9900<span>руб.</span></span>
                <span class="slide-oldprice">12990 руб.</span>
              </div>
            </div>
            <div class="swiper-slide">
              <img src="" alt="Изображение товара">
              <div class="slider-bottom">
                <div class="slide-name"><span>Самокат</div>
                <span class="slide-price">4900<span>руб.</span></span>
                <span class="slide-oldprice"></span>
              </div>
            </div>
            <div class="swiper-slide">
              <img src="1_1.jpg" alt="Изображение товара">
              <div class="slider-bottom">
                <div class="slide-name"><span>Вейкборд Harley LTD 2014</div>
                <span class="slide-price">9900<span>руб.</span></span>
                <span class="slide-oldprice">12990 руб.</span>
              </div>
            </div>
            <div class="swiper-slide">
              <img src="" alt="Изображение товара">
              <div class="slider-bottom">
                <div class="slide-name"><span>Вейкборд Wake park pro</div>
                <span class="slide-price">9900<span>руб.</span></span>
                <span class="slide-oldprice">12990 руб.</span>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="slider">
        <div class="item item-1"><a href="#"><span class="slidername">ЗАГОЛОВОК<span class="sliderdisc"></br>ПРОМО-ТОВАРА</span></span></a></div>
        <div class="item item-2"><a href="#"><span class="slidername">ЗАГОЛОВОК<span class="sliderdisc"></br>ПРОМО-ТОВАРА</span></span></a></div>
        <div class="item item-3"><a href="#"><span class="slidername">ЗАГОЛОВОК<span class="sliderdisc"></br>ПРОМО-ТОВАРА</span></span></a></div>
      </div>
      <div class="popularitemsblock">
        <div class="headpopularitems">Популярные товары
          <div class="swiper-button-prev1"></div>
          <div class="swiper-button-next1"></div>
        </div>
        <div class="swiper-container1">
          <div class="swiper-wrapper">
            <div class="swiper-slide">
              <img src="" alt="Изображение товара">
              <div class="slider-bottom">
                <div class="slide-name"><span>Самокат</div>
                <span class="slide-price">4900<span>руб.</span></span>
                <span class="slide-oldprice"></span>
              </div>
            </div>
            <div class="swiper-slide">
              <img src="1_1.jpg" alt="Изображение товара">
              <div class="slider-bottom">
                <div class="slide-name"><span>Вейкборд Harley LTD 2014</div>
                <span class="slide-price">9900<span>руб.</span></span>
                <span class="slide-oldprice">12990 руб.</span>
              </div>
            </div>
            <div class="swiper-slide">
              <img src="" alt="Изображение товара">
              <div class="slider-bottom">
                <div class="slide-name"><span>Вейкборд Wake park pro</div>
                <span class="slide-price">9900<span>руб.</span></span>
                <span class="slide-oldprice">12990 руб.</span>
              </div>
            </div>
            <div class="swiper-slide">
              <img src="" alt="Изображение товара">
              <div class="slider-bottom">
                <div class="slide-name"><span>Самокат</div>
                <span class="slide-price">4900<span>руб.</span></span>
                <span class="slide-oldprice"></span>
              </div>
            </div>
            <div class="swiper-slide">
              <img src="1_1.jpg" alt="Изображение товара">
              <div class="slider-bottom">
                <div class="slide-name"><span>Вейкборд Harley LTD 2014</div>
                <span class="slide-price">9900<span>руб.</span></span>
                <span class="slide-oldprice">12990 руб.</span>
              </div>
            </div>
            <div class="swiper-slide">
              <img src="" alt="Изображение товара">
              <div class="slider-bottom">
                <div class="slide-name"><span>Вейкборд Wake park pro</div>
                <span class="slide-price">9900<span>руб.</span></span>
                <span class="slide-oldprice">12990 руб.</span>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="aboutus">
        <div class="aboutusname">
          О магазине
        </div>
        <div class="history">
          Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis,
          sem.<br><br> Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt.
          Cras dapi-
        </div>
      </div>
      <?php require 'footer.php'; ?>
    </div>
    <script src="js/swiper.min.js"></script>
    <script>
      var swiper = new Swiper('.swiper-container', {
        slidesPerView: 4,
        slidesPerColumn: 2,
        nextButton: '.swiper-button-next',
        prevButton: '.swiper-button-prev',
        spaceBetween: 2
      });
      var swiper1 = new Swiper('.swiper-container1', {
        slidesPerView: 4,
        nextButton: '.swiper-button-next1',
        prevButton: '.swiper-button-prev1',
        spaceBetween: 2
      });
    </script>
  </body>

  </html>
