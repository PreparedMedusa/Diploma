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
    <link href="css/category_style.css" rel="stylesheet" type="text/css" />
    <title>Super SHOP - <?php echo get_category($_GET['category']); ?></title>
  </head>
  <body>
    <div class="wrapper">
      <header>
        <?php require 'header.php'; ?>
      </header>
      <h1><?php echo get_category($_GET['category']);?></h1>
      <div class="content-wrapper">
        <div class="top-bottom-side">Страницы</div>

        <div class="swiper-container">
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
  <!-- Add Pagination -->
  <div class="swiper-pagination"></div>
</div>

        <div class="top-bottom-side">Страницы</div>
      </div>
      <?php require 'footer.php'; ?>
    </div>
    <!-- Swiper JS -->
    <script src="js/swiper.min.js"></script>
    <!-- Initialize Swiper -->
    <script>
    var swiper = new Swiper('.swiper-container', {
      slidesPerView: 4,
      slidesPerColumn: 4,
      pagination: {
        el: '.swiper-pagination',
        clickable: true,
        renderBullet: function (index, className) {
          return '<span class="' + className + '">' + (index + 1) + '</span>';
        },
      },
      spaceBetween: 2
    });
  </script>
  </body>
</html>
