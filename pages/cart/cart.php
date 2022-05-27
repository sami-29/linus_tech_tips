<?php include '../../config/database.php' ?>
<?php
$sql = "SELECT * FROM cart";
$result = mysqli_query($conn, $sql);
$cart = mysqli_fetch_all($result, MYSQLI_ASSOC);
$cart_query = ['cart' => $cart];
$str = http_build_query($cart_query);
$total = 0;

function debug_to_console($data)
{
    $output = $data;
    if (is_array($output))
        $output = implode(',', $output);

    echo "<script>console.log('Debug Objects: " . $output . "' );</script>";
}

function delete_item($id)
{
    global $conn;
    $sql = "DELETE FROM cart WHERE id = $id";
    if (mysqli_query($conn, $sql)) {
        //success
        header("location: ../../pages/cart/cart.php");
    } else {
        //error
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}
if (isset($_GET['delete'])) {
    delete_item($_GET['delete']);
}

if (isset($_GET['search_id'])) {
    $search_id = $_GET['search_id'];
    $sql = "SELECT * FROM products WHERE id = $search_id";
    $result = mysqli_query($conn, $sql);
    $product = mysqli_fetch_assoc($result);
    $sql = "INSERT INTO cart (id, name, price, image, quantity) VALUES ('$search_id', '$product[name_small]', '$product[price]', '$product[image]', '1') ON DUPLICATE KEY UPDATE quantity = quantity + 1";
    if (mysqli_query($conn, $sql)) {
        //success
        header("location: ../../pages/cart/cart.php");
    } else {
        //error
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}
if (isset($_POST['increment'])) {
    debug_to_console($_POST['id']);
    $id = $_POST['id'];
    $sql = "UPDATE cart SET quantity = quantity + 1 WHERE id = $id";
    if (mysqli_query($conn, $sql)) {
        //success
        header("location: ../../pages/cart/cart.php");
    } else {
        //error
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}
// decrement quantity of item in cart by 1 if quantity is greater than 1
if (isset($_POST['decrement'])) {
    $id = $_POST['id'];
    $sql = "SELECT * FROM cart WHERE id = $id";
    $result = mysqli_query($conn, $sql);
    $product = mysqli_fetch_assoc($result);
    if ($product['quantity'] > 1) {
        $sql = "UPDATE cart SET quantity = quantity - 1 WHERE id = $id";
        if (mysqli_query($conn, $sql)) {
            //success
            header("location: ../../pages/cart/cart.php");
        } else {
            //error
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
    }
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../globals/styles/global.css">
    <link rel="shortcut icon" href="../../assets/2018_Linus_Tech_Tips_logo.svg.png" type="image/x-icon">
    <link rel="stylesheet" href="./cart.css?v=<?php echo time(); ?>">
    <!--<script src="main.js" defer></script>-->
    <title>Cart</title>
</head>

<body>
    <?php include "../../globals/header.php" ?>
    <main id="main">
        <?php

        //check if cart is empty
        if (empty($cart)) {
            echo '<div class="cart-empty"><h2 class="cart-empty__title">Your cart is empty</h2><p>You have no items in your cart. To buy one or more items, click "Add to cart" next to the item.</p></div>';
        } else {
            echo '<div class="cart"> 
                <div class="cart__header">
                    <p>image</p>
                    <p>name</p>
                    <p>price</p>
                    <p>quantity</p>
                    <p>total</p>
                </div>';

            foreach ($cart as $item) {
                $total += $item['price'] * $item['quantity'];
                echo '<div class="cart__item">
                    <a href = "../detail/detail.php?id=' . $item['id'] . '" class="cart__item-img">
                    <img src=' . $item['image'] . ' alt=' . $item['name'] . '></a>
                    <p class="cart__item-name">' . $item['name'] . '</p>
                    <p class="cart__item-price">' . $item['price'] . '$</p>
                    <form class = "quantity_modifier" action=' . htmlspecialchars($_SERVER["PHP_SELF"]) . ' method="POST">
                        <input type = "hidden" name = "id" value = ' . $item['id'] . '>
                        <input type = "submit" class="quantity_modifier__input" name ="decrement" value = "-" "/>
                        <p class="cart__item-quantity">' . $item['quantity'] . '</p>
                        <input type = "submit" class="quantity_modifier__input" name = "increment" value = "+" "/>
                    </form>
                    <p class="cart__item-total">Total: ' . $item['price'] * $item['quantity'] . '$</p>
                    <a href = "cart.php?delete=' . $item['id'] . '" class="cart__item-delete" onclick = >X</a>
                    </div>';
            }
        }

        ?>
        <div class="cart__total">
            <p>Total: <?php echo $total; ?>$</p>
        </div>
    </main>
    <?php include "../../globals/footer.php" ?>

</html>