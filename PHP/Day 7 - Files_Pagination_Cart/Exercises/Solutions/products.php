<?php

// Initialize empty products array
$products = array();

// 1. Connect to my DB
$conn = mysqli_connect('localhost', 'root', '', 'online_shopping');

// Did I connect successfully ? 
if ($conn) {

    // GRAB THE PAGE'S NUMBER !
    if (isset($_GET['page']))
        $page = $_GET['page'];
    else
        $page = 1;

    $limit = ($page - 1) * 3;
    $query = "SELECT * FROM product LIMIT $limit, 3";

    // 2. Prepare the query
    if (isset($_POST['searchBox'])) {
        $mySearch = $_POST['searchBox'];
        $query = "SELECT * FROM product WHERE name LIKE '%$mySearch%'";
    }

    // 3. Executing the query (send the query to the DB)
    $results = mysqli_query($conn, $query);

    // 4. Fetch the results in a associative array
    $products = mysqli_fetch_all($results, MYSQLI_ASSOC);

    // Query to count how many pages
    $query = "SELECT COUNT(*) AS total_amount FROM product";
    $results = mysqli_query($conn, $query);
    $res = mysqli_fetch_assoc($results);

    $total_pages = $res['total_amount'] / 3;
} else {
    echo 'Pb with connection !';
}


// Click on 'add to cart' button
session_start();
$number = 0;

if (isset($_POST['cartBtn'])) {
    // Retrieve all informations about the product
    $query = "SELECT * FROM product WHERE id = " . $_POST['productId'];
    $results = mysqli_query($conn, $query);
    $product = mysqli_fetch_assoc($results);

    // Add this product to the cart (session)
    $_SESSION['cart'][] = array(
        'name' => $product['name'],
        'price' => $product['price']
    );
}

// Only if there is a cart and its not empty
if (isset($_SESSION['cart']) && !empty($_SESSION['cart']))
    $number = count($_SESSION['cart']);

// Close the connection (you can close anywhere in the file)
mysqli_close($conn);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>products page</title>
</head>

<body>
    <?php require_once 'nav.php'; ?>

    <h2>Products list</h2>

    <h4>Search for a product : </h4>
    <form action="" method="post">
        <input type="text" name="searchBox" placeholder="Start typing title">
        <input type="submit" name="searchBtn" value="Search">
    </form>

    <?php foreach ($products as $product) : ?>
        <hr>
        <img src="<?= $product['picture']; ?>" alt="" width="100px">
        <p>
            <strong>Name :</strong>
            <!-- Same thing as echo -->
            <?= $product['name']; ?>
        </p>


        <p>
            <strong>Description :</strong>
            <?php echo $product['description']; ?>
        </p>

        <p>
            <strong>Price :</strong>
            <?php echo $product['price']; ?>&euro;
        </p>

        <p>
            <strong>Category :</strong>
            <?php echo $product['category']; ?>
        </p>

        <form action="" method="POST">
            <input type="hidden" name="productId" value="<?= $product['id'] ?>">
            <input type="submit" name="cartBtn" value="Add to cart">
        </form>

    <?php endforeach; ?>

    <div class="pagination">
        <?php
        // Only display previous if not on the first page
        if ($page > 1) {
            $previousPage = $page - 1;
            echo "<a href='products.php?page=$previousPage'>Previous</a>";
        }

        // Display next EXCEPT for the last page
        if ($total_pages > $page) {
            $nextPage = $page + 1;
            echo "<a href='products.php?page=$nextPage'>Next</a>";
        }
        ?>
    </div>
</body>

</html>