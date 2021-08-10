<?php

require_once 'flower_manager.php';

$FlowerManager = new FlowerManager();
$Flowers = $FlowerManager->findAll();

/*
echo '<pre>';
var_dump($Flower->findAll());
echo '</pre>';
*/
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Flowers</title>
</head>

<body>
    <h3>Flowers List</h3>

    <?php foreach ($Flowers as $Flower) : ?>
        <p>
            <strong>Name :</strong>
            <?= $Flower->getName() . '<br>';  ?>

            <strong>Price : </strong>
            <?= $Flower->getPrice() . '<br>';  ?>

        </p>
    <?php endforeach; ?>
</body>

</html>