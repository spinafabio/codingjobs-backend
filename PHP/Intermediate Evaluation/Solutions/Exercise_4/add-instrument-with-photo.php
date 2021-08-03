<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add instrument</title>
    <style>
        .error {
            color: red;
        }
    </style>
</head>

<body>

    <?php require_once 'nav.html'; ?>

    <h2>Add new instrument</h2>

    <?php

    // Initialize array to handle errors
    $errors = array();

    // Initialize empty variables (to remember values in the form)
    $name = '';
    $brand_name = '';
    $price = '';
    $type = '';
    $description = '';

    // Check if form was submitted
    if (isset($_POST['submitBtn'])) {
        // Validations on the inputs
        $name = trim($_POST['name']);
        $brand_name = trim($_POST['brand_name']);
        $price = trim($_POST['price']);
        $type = trim($_POST['type']);
        $description = trim($_POST['description']);

        //  The field name, brand_name, price, type are required.
        if (empty($name)) {
            $errors['name'] = 'Name is mandatory.<br>';
        }

        if (empty($brand_name)) {
            $errors['brand_name'] = 'Brand name is mandatory.<br>';
        }

        if (empty($price)) {
            $errors['price'] = 'Price is mandatory.<br>';
        } elseif (!is_numeric($price)) {
            // The price must contain numbers only.
            $errors['price'] = 'Price must be numbers only !<br>';
        }

        if (empty($type)) {
            $errors['type'] = 'Type is mandatory.<br>';
        }

        if ($_FILES['photo']['error'] != UPLOAD_ERR_NO_FILE && $_FILES['photo']['error'] != UPLOAD_ERR_OK) {
            // A ne pas faire en-dehors du DOM, bien sur.. En réalité on utilisera une variable intermédiaire
            $errors['photo'] = 'Error while downloading photo.';
        }

        // I need to check if there are some errors
        if (count($errors) == 0) {
            // No errors, I can Insert

            // FIRST, deal with the photo with one was uploaded
            $fileName = ''; // File name, without directory
            if ($_FILES['photo']['error'] != UPLOAD_ERR_NO_FILE) {
                // Accept only images
                $extFoundInArray = array_search(
                    $_FILES['photo']['type'],
                    array(
                        'jpg' => 'image/jpeg',
                        'png' => 'image/png',
                        'gif' => 'image/gif',
                    )
                );

                if ($extFoundInArray === false) {
                    echo ('File is not an image ! Upload canceled.');
                } else {
                    // Rename file to have unique name
                    $shaFile = sha1_file($_FILES['photo']['tmp_name']);
                    $nbFiles = 0;

                    do {
                        $fileName = $shaFile . $nbFiles . '.' . $extFoundInArray;
                        $fullPath = './uploads/' . $fileName;
                        $nbFiles++;
                    } while (file_exists($fullPath));

                    $moved = move_uploaded_file($_FILES['photo']['tmp_name'], $fullPath);
                }
            }

            // Connect to DB
            require_once 'database.php';
            $conn = mysqli_connect(DB_SERVER, DB_USER, DB_PASSWORD, DB_NAME);

            // Prepare query
            $query = "INSERT INTO instruments(name, brand_name, price, photo, type, description)
                VALUES('$name', '$brand_name', $price, '$fileName', '$type', '$description')";

            // Execute the query
            $result = mysqli_query($conn, $query);

            if ($result)
                echo 'Insert successfull.';
            else
                echo 'Something went wrong inserting.';
        }
    }

    ?>

    <form enctype="multipart/form-data" action="" method="post">
        <input type="text" name="name" placeholder="Instrument Name" value="<?= $name; ?>"><br>
        <span class="error"><?php if (isset($errors['name'])) echo $errors['name']; ?></span>

        <input type="text" name="brand_name" placeholder="Brand name" value="<?= $brand_name; ?>"><br>
        <span class="error"><?php if (isset($errors['brand_name'])) echo $errors['brand_name']; ?></span>

        <input type="number" step="0.01" name="price" placeholder="Price" value="<?= $price; ?>"><br>
        <span class="error"><?php if (isset($errors['price'])) echo $errors['price']; ?></span>

        <label for="type">Choose a type</label>
        <select name="type" id="type">
            <option value="guitar">Guitar</option>
            <option value="drum">Drum</option>
            <option value="bass">Bass</option>
        </select><br>
        <span class="error"><?php if (isset($errors['type'])) echo $errors['type']; ?></span>

        <input type="hidden" name="MAX_FILE_SIZE" value="5000000">
        <label for="photo">Select a photo :</label>
        <input type="file" name="photo"><br>
        <span class="error"><?php if (isset($errors['photo'])) echo $errors['photo']; ?></span>

        <textarea name="description" cols="30" rows="10" value="<?= $description; ?>"></textarea><br>

        <input type="submit" name="submitBtn" value="Add instrument">
    </form>
</body>

</html>