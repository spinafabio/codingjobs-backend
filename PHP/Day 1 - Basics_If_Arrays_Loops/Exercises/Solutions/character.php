<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Character page</title>
</head>
<body>
    <?php
/*

- Exercise 5
You need to create a web page with basics HTML tags.
In this page, you'll display all the characteristics of an imaginary character,
    from a role-play game.

    The character information will be saved in variables.
There is four (4) informations :
-- An avatar image
-- The last name
-- The first name
-- An array of characteristics (like attak point, defense point... put everything you want)
Use an associative array.

*/
    $avatar = 'banana.png';
    $lastName = 'Guy';
    $firstName = 'Banana';

    $characteristics = array(
        'atk' => 10,
        'def' => 5
    );

    /*echo $lastName . '<br>';
    echo $firstName . '<br>'; 
    
    echo "<img src='$avatar' alt='' width='100px'>";
    */
    ?>

    <h2>Character</h2>
    
    <p><strong>Last name : </strong> <?php echo $lastName; ?> </p>
    <p><strong>First name : </strong> <?php echo $firstName; ?> </p>

    <img src="<?php echo $avatar; ?>" alt="" width="100px">

    <?php

        if($characteristics['atk'] > 9 OR $characteristics['def'] > 9) {
            echo '<div class="alert">
                <strong>Congratulations !</strong> Your character is ready to fight.</strong>
            </div>';
        }

        foreach ($characteristics as $key => $value) {
            echo $key . ' : ' . $value . '<br>';
        }
    ?>


</body>
</html>