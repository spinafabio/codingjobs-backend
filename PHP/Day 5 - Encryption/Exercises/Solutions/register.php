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

        // username, mail and password must not be empty !
        if (empty($_POST['username'])) {
            echo 'Username is mandatory<br>';
            $errors = true;
        }

        if (empty($_POST['email'])) {
            echo 'Email is mandatory<br>';
            $errors = true;
        }

        if (empty($_POST['password'])) {
            echo 'Password is mandatory<br>';
            $errors = true;
        }

        // mail must be a valid one
        if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
            echo 'Email is not valid<br>';
            $errors = true;
        }

        // Insert only if no errors
        if ($errors == false) {
            // password must be hashed
            $hashedPassword = password_hash($_POST['password'], PASSWORD_DEFAULT);
            echo 'Inserting !!!!';
        }
    }
    ?>
</body>

</html>