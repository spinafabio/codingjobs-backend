<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Instrument detail</title>
</head>

<body>

    <?php require_once 'nav.html'; ?>

    <h2>Detail page</h2>
    <?php

    // Grab my ID from my url
    // I'm using GET method to pass data (id) to this page
    $id = $_GET['id'];

    // Make sure I get a valid integer, stop if not the case
    if (!is_numeric($id)) {
        exit("Stop trying to access something forbidden, my friend.");
    }

    // If everything good, I can connect and check the instrument
    require_once 'database.php';

    $conn = mysqli_connect(DB_SERVER, DB_USER, DB_PASSWORD, DB_NAME);

    // Did I connect successfully ?
    if ($conn) {
        // Prepare my query
        $query = 'SELECT * 
            FROM instruments
            WHERE id = ' . $id;

        // Send the query to the DB
        $results = mysqli_query($conn, $query);

        // First, Check if I get a result
        if (mysqli_num_rows($results) == 0) {
            echo 'This instrument doesnt exists !';
        } else {
            // Fetch the instrument
            $instrument = mysqli_fetch_assoc($results);
        }
    }
    ?>

    <?php if (isset($instrument)) : ?>
        <p>
            <img src="uploads/<?= $instrument['photo']; ?>" width="200px">
            <br>

            <strong>Name :</strong>
            <?= $instrument['name']; ?>
            <br>

            <strong>Brand name :</strong>
            <?= $instrument['brand_name']; ?>
            <br>

            <strong>Price :</strong>
            <?= $instrument['price']; ?>
            <br>

            <strong>Type :</strong>
            <?= $instrument['type']; ?>
            <br>

            <strong>Description :</strong>
            <?= $instrument['description']; ?>
            <br>

            <hr>
        </p>
    <?php endif; ?>
</body>

</html>