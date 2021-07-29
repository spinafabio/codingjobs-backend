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
                echo '{ "success" : "Welcome, ' . $user->name . '"}';
                $userExists = true;
                break;
            }
        }

        // New member section :
        if ($userExists == false) {
            echo '{"success": "Welcome new member"}';
            // save the user in PHP array
            $users[] = array('name' => $_POST['name'], 'mail' => $_POST['mail']);

            // convert to JSON string
            $json = json_encode($users, JSON_PRETTY_PRINT);
            file_put_contents('users.json', $json);
        }
    } else {
        /*foreach ($errors as $error) {
            echo $error . '<br>';
        }*/
        echo json_encode($errors, JSON_PRETTY_PRINT);
    }
}
