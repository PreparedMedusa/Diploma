 <header>
   <a href="index.php">
     <div class="label">
       <span>SUPER</span>
       <span>SHOP</span>
     </div>
   </a>
   <a href="basket.php">
     <div id="basket">
       <span id="totalCost">46945<span id="rub">руб.</span></span></br>
       <span id="total">2 предмета</span>
       <img src="images/cart.png" alt="basket">
     </div>
   </a>
 <div class="menu">
  <ul class="navbar-menu">
    <li><a href="#">КАТЕГОРИЯ 1</a></li>
    <li><a href="#">КАТЕГОРИЯ 2</a></li>
    <li><a href="#">КАТЕГОРИЯ 3</a></li>
    <li><a href="#">КАТЕГОРИЯ 4</a></li>
    <li style="visibility: hidden; width: 288px;"></li>
  </ul>
  <ul class="navbar-login">
    <?php
    if (isset($_SESSION['log']))
     {echo "<li style='width:100%;'><a href='#'><img src='images/logo.png' alt='logo' style='margin-right: 3px; vertical-align: middle;'>".$_SESSION['log']."</a>
             <ul>
               <li><a href='account.php'>Личный кабинет</a></li>
               <li><form action='index.php' method='post'><input type=submit name='out' class='logoutbtn' value='Выйти'></form></li>
             </ul>
           </li>";
     }
    else{echo "<li><a href='login.php'><img src='images/logo.png' alt='logo' style='margin-right:7px; vertical-align: middle; '>Войти</a></li>
               <li><a href='registr.php'>Регистрация</a></li>";}
    ?>
 </div>
</header>
