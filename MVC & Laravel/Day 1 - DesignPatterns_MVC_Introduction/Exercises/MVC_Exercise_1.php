<?php

/*

******* Exercise : Flower Website ********

In the Flowers table, we will record: The id, the name of the flower, the price.

In this exercise, you have to :
    - Create a home view that displays a welcome message and links to the different views.
    - Create an error view. This view will be a nice template for all errors you might display.
    For example : if someone try to access the view 'books', you have to display an error message saying that the view doesnt exists (and maybe with a link redirecting to the home view).
    - Create a view where you display the list of flowers (display Name and price). With a link 'read more'.
    This link will bring you to the detail view of the flower.
    - Create a view where you display the detail of a specific flower.
    - Create a view with a form. This form will be use to insert a new flower inside the DB.
    For this, you'll have to create a new method in the model & in the controller.
    - Edit the 'Flowers list' view. It should now have a link to 'delete' the flower.

You must use MVC and OOP !!

You have to create a FlowerController that ask the FlowerModel to return the flowers !
You probably have to create the Flower class also.
Everything will be display in the Views.

Tips : 
To access the different views, it should looks like this :
    homeview : localhost/flower_exercise/
    flowers view : localhost/flower_exercise/?view=flowers
    flower detail view : localhost/flower_exercise/?view=flowers&id=1