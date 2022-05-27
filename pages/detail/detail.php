<?php include '../../config/database.php' ?>
<?php
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "SELECT * FROM products WHERE id = $id";
    $result = mysqli_query($conn, $sql);
    $product = mysqli_fetch_assoc($result);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../globals/styles/global.css?v=<?php echo time(); ?>">
    <link rel="shortcut icon" href="../../assets/2018_Linus_Tech_Tips_logo.svg.png" type="image/x-icon">
    <link rel="stylesheet" href="detail.css?v=<?php echo time(); ?>">
    <title>Detail</title>
</head>

<body>
    <?php include "../../globals/header.php" ?>
    <main id="main">
        <div class=item_card>
            <img class="item_card__img" src=<?php echo $product['image'] ?> alt="${item.name}">
            <div class="item_card__info">
                <p class="item_card__title"><?php echo $product['name'] ?></p>
                <p> Rating: <span class="item_card__rating"><?php echo $product['rating'] ?>⭐ <?php echo $product['votes'] ?> votes</span></p>
                <p> Price: <span class="item_card__price"><?php echo $product['price'] ?>$</span></p>
                <p class="item_card__description"><?php echo $product['description'] ?></p>
                <div class="item_card__buttons">
                    <button class="item_card__button"><a href=<?php echo "../cart/cart.php?search_id=" . $product['id'] ?>> ADD TO CART</a></button>
                    <button class="item_card__button">Buy now</button>
                </div>
            </div>
        </div>
    </main>
    <?php include "../../globals/footer.php" ?>
</body>

</html>