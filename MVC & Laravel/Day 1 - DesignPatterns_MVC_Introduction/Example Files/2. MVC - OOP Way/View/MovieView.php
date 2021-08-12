<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movies List</title>
</head>

<body>
    <h3>Movies List</h3>

    <?php foreach ($movies as $movie) : ?>
        <p>
            <img src="<?= $movie['poster']; ?>" width="100px">
            <br>

            <strong>Title :</strong>
            <?= $movie['title']; ?>
            <br>

            <strong>Date : </strong>
            <?= $movie['date_of_release']; ?>

            <a href="index.php?page=movies&id=<?= $movie['id']; ?>">Read more</a>
            <hr>
        </p>
    <?php endforeach; ?>
</body>

</html>