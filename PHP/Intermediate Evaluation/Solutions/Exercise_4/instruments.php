<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Instruments</title>
</head>

<body>

    <?php

    require_once 'nav.html';

    require_once 'database.php';

    $conn = mysqli_connect(DB_SERVER, DB_USER, DB_PASSWORD, DB_NAME);

    // Did I connect successfully ?
    if ($conn) {

        // Prepare my query
        $query = 'SELECT * FROM instruments';

        // Send the query to the DB
        $results = mysqli_query($conn, $query);

        // Fetch as associative array
        $instruments = mysqli_fetch_all($results, MYSQLI_ASSOC);
    }

    ?>

    <h3>Instruments List</h3>

    <table border="1">
        <tr>
            <th>Picture</th>
            <th>Name</th>
            <th>Brand name</th>
            <th>Price</th>
            <th>Type</th>
            <th>Description</th>
            <th></th>
        </tr>
        <?php foreach ($instruments as $instrument) : ?>
            <tr>

                <td><img src="uploads/<?= $instrument['photo']; ?>" width="100px"></td>

                <td><?= $instrument['name']; ?></td>

                <td><?= $instrument['brand_name']; ?></td>

                <td><?= $instrument['price']; ?></td>

                <td><?= $instrument['type']; ?></td>

                <td>
                    <?php
                    echo substr($instrument['description'], 0, 30);
                    if (strlen($instrument['description']) > 30)
                        echo '...';
                    ?>
                </td>

                <td><a href="instrument.php?id=<?= $instrument['id']; ?>">Read more</a></td>
            </tr>
        <?php endforeach; ?>
    </table>

</body>

</html>