<?php
// start the session before any HTML tag:
session_start();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>

<body>
    <form action="" method="post">
        <input type="email" name="email" placeholder="Email address"><br>
        <input type="password" name="password" placeholder="Enter password"><br>

        <input type="submit" name="submitBtn" value="Log-in">
    </form>

    <?php
    if (isset($_POST['submitBtn'])) {

        // Check if email is empty
        if (empty($_POST['email']))
            echo 'Email is mandatory';
        else {
            // If email is ok
            // Look if the user exists in DB

            // 1 . Connect to the db
            $conn = mysqli_connect('localhost', 'root', '', 'movie_db');
            // 2 . Query : ask for a specific user (thanks to the email address)
            $query = "SELECT *
            FROM users
            WHERE email = '" . $_POST['email'] . "'";

            $results = mysqli_query($conn, $query);
            // 3. Look if you have a result or not (false).
            // mysqli_num_rows($result) : return number of results
            if (mysqli_num_rows($results) > 0) {
                echo 'User exists !';

                // Saving the email 
                $_SESSION['email'] = $_POST['email'];
            } else
                echo 'User doesnt exists in our DB !';
        }
    }
    ?>
</body>

</html>