<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Flowers List</title>
</head>

<body>
    <h3>Flowers List</h3>
    <form action="" method="get">
        <input type="text" name="name" placeholder="Insert a Flowername">
        <input type="number" name="price" placeholder="Price">
        <input type="submit" name="submit">
    </form>
    <?php foreach ($flowers as $flower) : ?>
        <p>
            <strong>Name :</strong>
            <?= $flower['name']; ?>
            <br>

            <strong>Price : </strong>
            <?= $flower['price']; ?>

            <a href="index.php?page=flower&id=<?= $flower['id']; ?>">Read more</a>
            <hr>
        </p>
    <?php endforeach; ?>
</body>

</html>