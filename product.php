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
    <link href="css/product_style.css" rel="stylesheet" type="text/css" />
    <title>Super SHOP - Главная</title>
  </head>

  <body>
    <div class="wrapper">
      <header>
        <?php require 'header.php'; ?>
      </header>
      <h1>Категория 1</h1>
      <a href="index.php">вернуться в каталог</a>
      <div class="product_container">
        <div class="foto-container">
          <div class="swiper-container gallery-top">
            <div class="swiper-wrapper">
              <?php
              $items=main_items('id',$_GET['id']);
              foreach ($items as $item) {?>
                <div class="swiper-slide" style="background-image:url(<?php echo $item['img'] ?>)"></div>
              <?php } ?>
            </div>
            <!-- Add Arrows -->
            <div class="swiper-button-next swiper-button-white"></div>
            <div class="swiper-button-prev swiper-button-white"></div>
          </div>
          <div class="swiper-container gallery-thumbs">
          <div class="swiper-wrapper">
            <?php
            $items=main_items('id',$_GET['id']);
            foreach ($items as $item) {?>
            <div class="swiper-slide" style="background-image:url(<?php echo $item['img'] ?>)"></div>
            <?php } ?>
          </div>
        </div>
        </div>
        <div class="info-container">
          <h1>Название товара</h1>
          <?php echo $item['name'] ?>
          <h2>Описание товара</h2>
          <?php echo $item['discription'];
          if($item['types']!=null){echo '<h2>Выберите вариант:</h2>'.$item['types'];}?>
        </div>
        <div class="price-container">
          <?php echo $item['price'] ?>руб.
        </div>
      </div>
      <?php require 'footer.php'; ?>
    </div>
    <!-- Swiper JS -->
    <script src="js/swiper.min.js"></script>

    <!-- Initialize Swiper -->
    <script>
      var galleryTop = new Swiper('.gallery-top', {
        spaceBetween: 10,
        navigation: {
          nextEl: '.swiper-button-next',
          prevEl: '.swiper-button-prev',
        },
      });
      var galleryThumbs = new Swiper('.gallery-thumbs', {
        slidesPerView: 4,
        spaceBetween: 10,
        centeredSlides: true,
        slidesPerView: 'auto',
        touchRatio: 0.2,
        slideToClickedSlide: true,
      });
      galleryTop.controller.control = galleryThumbs;
      galleryThumbs.controller.control = galleryTop;
    </script>
  </body>
</html>
