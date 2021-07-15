<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register page</title>
</head>

<body>
    <h2>Register page</h2>
    <form action="" method="post">
        <input type="text" name="username" placeholder="Username"><br>
        <input type="email" name="email" placeholder="Email"><br>
        <input type="password" name="password" placeholder="Password"><br>

        <input type="submit" name="registerBtn" value="Register">
    </form>

    <?php

    // Register only when form is submitted
    if (isset($_POST['registerBtn'])) {
        // by default, no errors
        $errors = false;

        // Grab data while cleaning it
        $userName = strip_tags(trim($_POST['username']));
        $userPassword = strip_tags(trim($_POST['password']));
        $sanitizedMail = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);

        // username, mail and password must not be empty !
        if (empty($userName)) {
            echo 'Username is mandatory<br>';
            $errors = true;
        }

        if (empty($sanitizedMail)) {
            echo 'Email is mandatory<br>';
            $errors = true;
        }

        if (empty($userPassword)) {
            echo 'Password is mandatory<br>';
            $errors = true;
        }

        // mail must be a valid one
        if (!filter_var($sanitizedMail, FILTER_VALIDATE_EMAIL)) {
            echo 'Email is not valid<br>';
            $errors = true;
        }

        // Insert only if no errors
        if ($errors == false) {
            // password must be hashed
            $hashedPassword = password_hash($userPassword, PASSWORD_DEFAULT);

            // 1. Connect to my DB
            $conn = mysqli_connect('localhost', 'root', '', 'movie_db');
            $query = "INSERT INTO users(username, email, password)
            VALUES('$userName', '$sanitizedMail', '$hashedPassword')";

            // 2. Execute the query
            $result = mysqli_query($conn, $query);

            // INSERT/UPDATE/DELETE returns true OR false
            if ($result)
                echo 'Successfully inserted in the DB';
            else
                echo 'Problem inserting in the DB';
        }
    }
    ?>
</body>

</html>