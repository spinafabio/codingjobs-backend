<?php

class FlowerController
{
    private $model;

    public function __construct()
    {
        require_once 'Model/FlowerModel.php';
        $this->model = new FlowerModel();
    }

    public function handleFlowers()
    {
        //1. Ask the model the flowers list
        $flowers = $this->model->getFlowers();

        //2. Check/Do the validations
        if (count($flowers) == 0) {
            echo 'No flowers found.';
        } else {
            //3. Pass movies list to the view
            require_once 'View/FlowerView.php';
        }
    }

    public function handleFlower($id)
    {
        //1. Ask the model
        $flower = $this->model->getFlower($id);

        //2 Check / Do the validations
        if (!$flower) {
            echo 'No flower found with this id.';
        } else {
            require_once 'View/FlowerDetail.php';
        }
    }
}
