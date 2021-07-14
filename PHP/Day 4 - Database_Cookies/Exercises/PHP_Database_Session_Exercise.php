<?php
/*
	Let's assume you have an online shopping website.

	Step 1 :
		Import the 'users.sql' file into PHPMYADMIN.
		You have to choose a DB first (you can use movie_db or create a new one).

		Some users will be imported into your database.
		You can insert users manually from PHPMYADMIN interface if you want.

    Step 2: 
	    Create a page 'login.php'.
	    Inside this page, create a form to login into your beautiful website.

	    The form will ask for : email, password.

    Step 3: 
		Once the user submit the login form, you have to :
			- Check if email is not empty.
			- Check if user exists in DB
			- Open a session.
			- In this session, save the email adress.

	Step 4:
		Create a page 'account.php'.

		If a user is trying to access that page :
			- Check if the user logged in before 
			- If he's not log-in you need to redirect to the login page.
			- If he logged-in, display 'Hello, username'

		To redirect in php : Look for header('location : ....') on google

    Step 5 (BONUS): 
		
		Add a 'logout' button.
		When the user click, the user should be redirected to the login page and should now be log out.


 */