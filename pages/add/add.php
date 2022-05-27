<?php include '../../config/database.php'; ?>
<?php
$small_name = $big_name = $price = $description = $image = $rating = $votes = "";
$small_name_err = $big_name_err = $price_err = $description_err = $image_err = $rating_err = $votes_err = "";

// Form submit
if (isset($_POST['submit'])) {
    //validate small name
    if (empty(trim($_POST['small_name']))) {
        $small_name_err = "Please enter a small name.";
    } else {
        $small_name = filter_input(INPUT_POST, 'small_name', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    }

    //validate big name
    if (empty(trim($_POST['big_name']))) {
        $big_name_err = "Please enter a big name.";
    } else {
        $big_name = filter_input(INPUT_POST, 'big_name', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    }
    //validate price
    if (empty(trim($_POST['price']))) {
        $price_err = "Please enter a price.";
    } else {
        $price = filter_input(INPUT_POST, 'price', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    }
    //validate description
    if (empty(trim($_POST['description']))) {
        $description_err = "Please enter a description.";
    } else {
        $description = filter_input(INPUT_POST, 'description', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    }
    //validate image
    if (empty(trim($_POST['image']))) {
        $image_err = "Please enter an image url.";
    } else {
        $image = filter_input(INPUT_POST, 'image', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    }
    //validate rating
    if (empty(trim($_POST['rating']))) {
        $rating_err = "Please enter a rating.";
    } else {
        $rating = filter_input(INPUT_POST, 'rating', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    }
    //validate votes
    if (empty(trim($_POST['votes']))) {
        $votes_err = "Please enter a votes.";
    } else {
        $votes = filter_input(INPUT_POST, 'votes', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    }
    // Check input errors before inserting in database
    if (empty($small_name_err) && empty($big_name_err) && empty($price_err) && empty($description_err) && empty($image_err) && empty($rating_err) && empty($votes_err)) {
        //add product to database
        $sql = "INSERT INTO products (name_small, name, price, description, image, rating, votes) VALUES ('$small_name', '$big_name', '$price', '$description', '$image', '$rating', '$votes')";
        if (mysqli_query($conn, $sql)) {
            //success
            header("location: ../../pages/add/add.php");
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
    <link rel="stylesheet" href="../../globals/styles/global.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="add.css">
    <link rel="shortcut icon" href="../../assets/2018_Linus_Tech_Tips_logo.svg.png" type="image/x-icon">
    <link rel="stylesheet" href="./add.css?v=<?php echo time(); ?>">
    <title>Add product | admin </title>
</head>

<body>
    <?php include "../../globals/header.php" ?>
    <main>
        <div class="form-container">
            <form class="form" action=<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?> method="POST">
                <h1 class="title">Add product</h1>
                <div class="field">
                    <label class="form-label" for="small_name">Name: </label>
                    <input class="form-control" id="small_name" name="small_name" placeholder="Enter product name" type="text">
                </div>
                <div class="field">
                    <label class="form-label" for="big_name">Expanded Name: </label>
                    <input class="form-control" id="big_name" name="big_name" placeholder="Enter product's expanded name" type="text">
                </div>
                <div class="field">
                    <label class="form-label" for="image">Image Url: </label>
                    <input class="form-control" id="image" name="image" placeholder="Enter product's image URL" type="url">
                </div>
                <div class="field">
                    <label class="form-label" for="rating">Rating: </label>
                    <input class="form-control" id="rating" name="rating" placeholder="Enter product rating" type="text">
                </div>
                <div class="field">
                    <label class="form-label" for="votes">Votes: </label>
                    <input class="form-control" id="votes" name="votes" placeholder="Enter product number of votes" type="text">
                </div>
                <div class="field">
                    <label class="form-label" for="description">Description: </label>
                    <textarea class="form-control" id="description" name="description" rows="10" cols="20" placeholder="Enter Product's description"></textarea>
                </div>
                <div class="field">
                    <label class="form-label" for="price">Price: </label>
                    <input class="form-control" id="price" name="price" placeholder="Enter product's price(in dollars $)" type="text">
                </div>
                <div class="field-submit">
                    <label class="form-label" for="submit"></label>
                    <input class="form-control" id="submit" name="submit" type="submit">
                </div>
            </form>
        </div>
    </main>
    <?php include "../../globals/footer.php" ?>


</body>

</html>