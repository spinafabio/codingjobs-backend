<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movie detail</title>
</head>

<body>
    <div>
        <img src="<?= $movie['poster']; ?>" width="100px">
        <br>

        <strong>Title :</strong>
        <?= $movie['title']; ?>
        <br>

        <strong>Date : </strong>
        <?= $movie['date_of_release']; ?>

    </div>
</body>

</html>