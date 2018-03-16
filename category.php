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
        <div class="top-bottom-side">Страницы</div>
      </div>
      <?php require 'footer.php'; ?>
    </div>
  </body>
</html>
