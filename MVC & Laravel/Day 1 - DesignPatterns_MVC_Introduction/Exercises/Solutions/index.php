<?php

if (isset($_GET['page'])) {

    // Only accept valid request
    if ($_GET['page'] == 'flower') {
        // Call flower controller
        require_once 'Controller/FlowerController.php';
        $flowerCtrl = new FlowerController();

        // Check if I get an id
        if (isset($_GET['id']))
            $flowerCtrl->handleFlower($_GET['id']);
        else
            $flowerCtrl->handleFlowers();
    } else {
        echo 'Page doesnt exists';
    }
} else {
    require_once 'View/FlowerView.php';
}
