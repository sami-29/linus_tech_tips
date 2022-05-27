<?php 
$a=__DIR__;
$a = str_replace('\\',"/",$a);
$a = str_replace('/globals','',$a);
$link = "http://".$_SERVER['SERVER_NAME'].'/php-crash';
?>
<header>
        <nav class="nav-bar">
            <a href= <?php echo $link."/index.php" ?>>
                <div class = nav-bar__container>
                    <img class = nav-bar__logo src= <?php echo $link."/assets/2018_Linus_Tech_Tips_logo.svg.png" ?> alt="Logo">
                    <h1 class = nav-bar__title>Linus Tech Tips</h1>
                </div>
            </a>
            
            <div class="nav-bar__container">
                <a href=<?php echo $link."/pages/cart/cart.php" ?>> <img class="nav-bar__cart" src=<?php echo $link."/assets/icon-cart.svg" ?> alt="cart"></a> 
                <img class="nav-bar__avatar" src=<?php echo $link."/assets/avatar.jpg" ?> alt="linus">
            </div>
        </nav>
    </header>