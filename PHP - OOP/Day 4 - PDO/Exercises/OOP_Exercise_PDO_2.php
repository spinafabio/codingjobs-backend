<?php
/*

Overview : 
	Create a page to view some flowers.
	We will have, in database, the tables Flowers

	In the Flowers table, we will record: The name of the flowers and their prices

	In this exercise, you have to use PDO.


Step 1 : Display flowers

	- We will not take into account the creation of the flowers, they will be created manually in the database.	Import 'flower_database.sql' file.
	
	- Create the page view-flowers.php

	- Create class FlowerManager.
	Create a method findAll() that will retrieve all the flowers and return the result

	Display all the flowers on the page.

Step 2 : 

	- Create the class Flower.
	This class will represent a flower (name, price).

	- Create getter and setter

	- Edit FlowerManager::findAll() method.
	This method should now return a set(array) of Flower objects.

Step 3 :

	- Edit the FlowerManager class.
	Add a new method FlowerManager::find($id).
	This function retrieve one specific flower (thanks to the id) and return it.

	- On the view-flowers page, add a link 'see more' next to each flowers.
	This link redirect to 'flower-detail' page.

	- Create page 'flower-detail.php'
	Use get method (same as movie) to grab the id of the flower.

	- Display the flower using FlowerManager::find($id) method.
	

 ?>


