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
    <title>Super SHOP - <?php $items=main_items('id',$_GET['id']);
    foreach ($items as $item) {echo $item['name'];} ?></title>
  </head>

  <body>
    <div class="wrapper">
      <header>
        <?php require 'header.php'; ?>
      </header>
      <h1><?php echo get_category($_GET['category']);?></h1>
      <a href="index.php" class="backlink">вернуться в каталог</a>
      <div class="product_container">
        <!-- Big item logo -->
        <div class="foto-container">
          <div class="swiper-container gallery-top">
            <div class="swiper-wrapper">
              <?php
              $items=main_items('id',$_GET['id']);
              foreach ($items as $item) {
                $image=explode(",",$item['img']);
                for($n=0; $image[$n]!=false; $n++){?>
                <div class="swiper-slide" style="background-image:url(<?php echo $image[$n] ?>)"></div>
              <?php }} ?>
            </div>
          </div>
          <!-- Another preview logo -->
          <div class="swiper-container gallery-thumbs">
            <div class="swiper-wrapper">
              <?php
              $items=main_items('id',$_GET['id']);
              foreach ($items as $item) {
                $image=explode(",",$item['img']);
                for($n=0; $image[$n]!=false; $n++){?>
              <div class="swiper-slide" style="background-image:url(<?php echo $image[$n] ?>)"></div>
            <?php }} ?>
            </div>
          </div>
          <div class="swiper-button-next swiper-button-white"></div>
          <div class="swiper-button-prev swiper-button-white"></div>
        </div>
        <div class="info-container">
          <h1><?php echo $item['name'] ?></h1>
          <div class="redline" style="background-color:#ed1651; width:370px; height:3px; margin-top: 10px; margin-bottom:17px;"></div>
          <?php echo '<h2>'.$item['discription'].'</h2>';
          if($item['types']!=null){
            $option=explode(",",$item['types']);
            echo '<span>Выберите вариант:</span><select>';
            for($n=0; $option[$n]!=false; $n++){
              echo '<option>'.$option[$n].'</option>';
            }
            echo '</select>';
          }?>
        </div>
        <div class="price-container">
          <?php echo $item['price'] ?>руб.
        </div>
      </div>
      <!-- Another items from same category block -->
      <div class="popularitemsblock">
        <div class="headpopularitems">Другие товары из категории "
          <?php echo get_category($_GET['category']);?>"
          <div class="swiper-button-prev1"></div>
          <div class="swiper-button-next1"></div>
        </div>
        <div class="swiper-container1">
          <div class="swiper-wrapper">
            <?php
            $items=main_items('category_id',$_GET['category']);
            foreach ($items as $item) {
            $image=explode(",",$item['img']);?>
            <div class="swiper-slide">
              <a href="product.php?id=<?php echo $item['id'] ?>&category=<?php echo $item['category_id'] ?>">
                <img src=<?php echo $image[0] ?> alt="Изображение товара">
              </a>
              <div class="slider-bottom">
                <a href="product.php?id=<?php echo $item['id'] ?>&category=<?php echo $item['category_id'] ?>">
                  <div class="slide-name"><span><?php echo $item['name'] ?></div>
                  <span class="slide-price"><?php echo $item['price'] ?><span>руб.</span></span>
                  <span class="slide-oldprice">
                    <?php
                    if ($item['oldprice']!=0){
                    echo $item['oldprice'].'<span>руб.</span>';
                  }?>
                  </span>
                </a>
              </div>
            </div>
            <?php } ?>
          </div>
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
      var swiper1 = new Swiper('.swiper-container1', {
        slidesPerView: 4,
        navigation: {
        nextEl: '.swiper-button-next1',
        prevEl: '.swiper-button-prev1',
        },
        spaceBetween: 2
      });
    </script>
  </body>
</html>
