<?php

/*

    Goal of this example : 
        - Get All the movies
        - Get a detail page of a movie



    ROUTEUR - FRONT CONTROLLER

    It will handle every requests from the user.
    Depending on this request, it will call the right controller.

    For example :
        - If you want to display all flowers, the routeur will call the FlowerController.
        - If you want to retrieve informations about users, the routeur will call the UserController.

    Example of URL :
        http://myproject.com/index.php?page=movies

        /index.php?page=movies&id=4
    
*/

// Check if there is a request
if (isset($_GET['page'])) {

    // Only accept valid request
    if ($_GET['page'] == 'movies') {
        // Call movie controller
        require_once 'Controller/MovieController.php';
        $movieCtrl = new MovieController();

        // Check if I get an id
        if (isset($_GET['id']))
            $movieCtrl->handleMovie($_GET['id']);
        else
            $movieCtrl->handleMovies();
    } else {
        echo 'Page doesnt exists';
    }
} else {
    echo 'Display home page';
}
