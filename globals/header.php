<?php
$a = __DIR__;
$a = str_replace('\\', "/", $a);
$a = str_replace('/globals', '', $a);
$link = "http://" . $_SERVER['SERVER_NAME'] . '/php-crash';
$search = "";
if (isset($_POST['search'])) {
    $search = $_POST['search'];
    $sql = "SELECT * FROM products WHERE name LIKE '%$search%'";
    $result = mysqli_query($conn, $sql);
    $resultCheck = mysqli_num_rows($result);
    if ($resultCheck > 0) {
        // go to index.php and display the results of the search using the url 
        header("location: $link/index.php?search=$search");
    }
}
?>
<header>
    <nav class="nav-bar">
        <a href=<?php echo $link . "/index.php" ?>>
            <div class=nav-bar__container>
                <img class=nav-bar__logo src=<?php echo $link . "/assets/2018_Linus_Tech_Tips_logo.svg.png" ?> alt="Logo">
                <h1 class=nav-bar__title>Linus Tech Tips</h1>
            </div>
        </a>



        <div class="nav-bar__container">
            <a href=<?php echo $link . "/pages/cart/cart.php" ?>> <img class="nav-bar__cart" src=<?php echo $link . "/assets/icon-cart.svg" ?> alt="cart"></a>
            <form class="form" action=<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?> method="POST">
                <input class="search" name="search" value="<?php echo $search ?>" type="search" placeholder="Search product...">
            </form>
        </div>
    </nav>
</header>