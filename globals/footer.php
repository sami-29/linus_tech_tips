<?php
$a = __DIR__;
$a = str_replace('\\', "/", $a);
$a = str_replace('/globals', '', $a);
$link = "http://" . $_SERVER['SERVER_NAME'] . '/php-crash';
// index.php link with the current parameters
// first see which parameters are set
$parameters = [];
if (isset($_GET['search'])) {
    $parameters[] = "search=" . $_GET['search'];
}
if (isset($_GET['sortby'])) {
    $parameters[] = "sortby=" . $_GET['sortby'];
}
if (isset($_GET['category'])) {
    $parameters[] = "category=" . $_GET['category'];
}
if (isset($_GET['brand'])) {
    $parameters[] = "brand=" . $_GET['brand'];
}
// put the parameters in the $index variable
$index = $link . "/index.php";
if (count($parameters) > 0) {
    $index = $index . "?" . implode("&", $parameters);
}

//function to concatenate 2 strings if first string does not contain second string
function concat($string1, $string2)
{
    if (strpos($string1, $string2) !== false) {
        return $string1;
    } else {
        return $string1 . $string2;
    }
}

?>
<footer class="footer">
    <div class="footer__our-products">
        <h1 class="footer__title">Our products</h1>
        <ul>
            <li>by price : <a class="price asc" href=<?php echo $index . "?sortby=asc" ?>>asending</a> | <a class="price dsc" href=<?php echo $index . "?sortby=dsc" ?>>desending</a></li>
            <li class="brand">by brand : <a class="amd" href=<?php echo $link . "/index.php?brand=amd" ?>> amd </a> | <a class="nvidia" href=<?php echo $link . "/index.php?brand=nvidia" ?>> nvidia </a> | <a class="intel" href=<?php echo $link . "/index.php?brand=intel" ?>> intel </a> </li>
            <!-- by category -->
            <li class="category">by category : <a class="cpu" href=<?php echo $link . "/index.php?category=cpu" ?>> cpu </a> | <a class="gpu" href=<?php echo $link . "/index.php?category=gpu" ?>> gpu </a> | <a class="ram" href=<?php echo $link . "/index.php?category=ram" ?>> ram </a> | <a class="psu" href=<?php echo $link . "/index.php?category=psu" ?>> psu </a> | <a class="motherboard" href=<?php echo $link . "/index.php?category=motherboard" ?>> motherboard </a> | <a class="storage" href=<?php echo $link . "/index.php?category=storage" ?>> storage </a></li>
            <li><a href=<?php echo $link . "/pages/add/add.php" ?>>Add product(admin only)</a></li>
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