<?php

// Form submit
if (!empty($_POST)) {
    $errors = array();

    if (empty($_POST['title']))
        $errors['title'] = 'Title mandatory';


    if (empty($_POST['date']))
        $errors['date'] = 'Date mandatory';

    if (empty($errors)) {
        echo 'NO ERRORS !';
    }
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Check</title>
</head>

<body>
    <form action="" method="post">
        <input type="text" name="title" placeholder="Title">
        <?php if (isset($errors['title'])) echo $errors['title']; ?>
        <br>
        <input type="text" name="date" placeholder="Date">
        <?php if (isset($errors['date'])) echo $errors['date']; ?><br>
        <textarea name="description" id="" cols="30" rows="10"></textarea><br>

        <input type="submit" value="SEND">

    </form>
</body>

</html>