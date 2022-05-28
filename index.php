<?php include './config/database.php' ?>
<?php
$sql = "SELECT * FROM products";
$result = mysqli_query($conn, $sql);
$products = mysqli_fetch_all($result, MYSQLI_ASSOC);


//function to sort by price
function sortByPrice($products, $sortby)
{
    if ($sortby == "asc") {
        usort($products, function ($a, $b) {
            return $a['price'] - $b['price'];
        });
    } else {
        usort($products, function ($a, $b) {
            return $b['price'] - $a['price'];
        });
    }
    return $products;
}

//function to sort by category
function sortByCategory($products, $category)
{
    if ($category == "cpu") {
        usort($products, function ($a, $b) {
            return $a['category'] - $b['category'];
        });
    } else if ($category == "gpu") {
        usort($products, function ($a, $b) {
            return $a['category'] - $b['category'];
        });
    } else if ($category == "ram") {
        usort($products, function ($a, $b) {
            return $a['category'] - $b['category'];
        });
    } else if ($category == "psu") {
        usort($products, function ($a, $b) {
            return $a['category'] - $b['category'];
        });
    } else if ($category == "motherboard") {
        usort($products, function ($a, $b) {
            return $a['category'] - $b['category'];
        });
    } else if ($category == "storage") {
        usort($products, function ($a, $b) {
            return $a['category'] - $b['category'];
        });
    }
    return $products;
}
// function to search by name or description or name_small
function searchByName($products, $search)
{
    $search = strtolower($search);
    $products = array_filter($products, function ($product) use ($search) {
        return strpos(strtolower($product['name']), $search) !== false || strpos(strtolower($product['name_small']), $search) !== false;
    });
    return $products;
}


if (isset($_GET['search'])) {
    $products = searchByName($products, $_GET['search']);
}

if (isset($_GET['sortby'])) {
    $sortby = $_GET['sortby'];
    $products = sortByPrice($products, $sortby);
}
if (isset($_GET['category'])) {
    $category = $_GET['category'];
    $products = sortByCategory($products, $category);
}

if (isset($_GET['brand'])) {
    $brand = $_GET['brand'];
    // if brand in name or name_small or description
    $sql = "SELECT * FROM products WHERE name LIKE '%$brand%' OR name_small LIKE '%$brand%' OR description LIKE '%$brand%'";
    $result = mysqli_query($conn, $sql);
    $products = mysqli_fetch_all($result, MYSQLI_ASSOC);
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./globals/styles/global.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="index.css?v=<?php echo time(); ?>">
    <link rel="shortcut icon" href="./assets/2018_Linus_Tech_Tips_logo.svg.png" type="image/x-icon">
    <title>Linus tech tips</title>
    <script src="main.js" defer></script>
</head>

<body>
    <?php include './globals/header.php' ?>

    <main>
        <div class="products">
            <?php foreach ($products as $product) : ?>
                <div class="product">
                    <div class="product-image-price">
                        <a href=<?php echo "./pages/detail/detail.php?id=" . $product["id"] ?>><img src="<?php echo $product['image'] ?>" alt=""></a>
                        <p>Price: <span class="price"><?php echo $product['price'] ?>$</span></p>
                    </div>
                    <div class="product-info">
                        <h3><?php echo $product['name'] ?></h3>
                    </div>
                    <div class="buy-cart">
                        <button class="button"><a href="">BUY NOW!</a> </button>
                        <button class="add-to-cart button"><a href=<?php echo "./pages/cart/cart.php?search_id=" . $product['id'] ?>> ADD TO CART</a> </button>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>

        <div style="display:none" class="special_quantity_modifier">
            <div class="decrease"></div>
            <div class="quantity">
                <input type="number" value="1" min="1" max="25">
            </div>
            <div class="increase"></div>
        </div>

    </main>

    <?php include './globals/footer.php' ?>
</body>

</html>