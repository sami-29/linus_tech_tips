<?php 
$a=__DIR__;
$a = str_replace('\\',"/",$a);
$a = str_replace('/globals','',$a);
$link = "http://".$_SERVER['SERVER_NAME'].'/php-crash';
?>
<footer class="footer">
        <div class="footer__our-products">
            <h1 class="footer__title">Our products</h1>
            <ul>
                <li>by category</li>
                <li>by disponibility</li>
                <li><a href=<?php echo $link."/pages/add/add.php" ?>>Add product(admin only)</a></li>
            </ul>
        </div>
        <div class="footer__about">
            <h1 class="footer__title">About us</h1>
            <ul>
                <li>Subscribe</li>
                <li>What are we</li>
                <li>Contact</li>
            </ul>
        </div>
</footer>