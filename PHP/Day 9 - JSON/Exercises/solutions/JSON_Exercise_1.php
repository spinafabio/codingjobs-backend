<?php

// Form submit
if (!empty($_POST)) {
    $errors = array();

    if (empty($_POST['name']))
        $errors['name'] = 'Name is mandatory';


    if (empty($_POST['mail']))
        $errors['mail'] = 'Mail is mandatory';

    // Only if no errors
    if (empty($errors)) {
        // Step 1 : Grab content of the file
        $fileContent = file_get_contents('../users.json');

        // sTEP 2 Deserialize
        $users = json_decode($fileContent);

        // User exists ?
        $userExists = false;

        foreach ($users as $position => $user) {
            // each user ! we can compare name of the input with name of the current user
            if ($_POST['name'] == $user->name && $_POST['mail'] == $user->mail) {
                echo 'Welcome, ' . $user->name . '<br>';
                $userExists = true;
                break;
            }
        }

        // New member section :
        if ($userExists == false) {
            echo 'Welcome new member';
            // save the user in PHP array
            $users[] = array('name' => $_POST['name'], 'mail' => $_POST['mail']);

            // convert to JSON string
            $json = json_encode($users, JSON_PRETTY_PRINT);
            file_put_contents('users.json', $json);
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User connection</title>
</head>

<body>
    <h3>Json Exercise 1</h3>

    <form action="" method="post">
        <input type="text" name="name" placeholder="Name">
        <?= (isset($errors['name'])) ? $errors['name'] : ''; ?>
        <br>
        <input type="email" name="mail" placeholder="Mail">
        <?= (isset($errors['mail'])) ? $errors['mail'] : ''; ?>
        <br>

        <input type="submit" value="SEND">
    </form>
</body>

</html>