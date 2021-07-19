<?php

$file_handle = fopen('../users.txt', 'r');
$users = array();

// For each line of text file
while (!feof($file_handle)) {
	// Get the current line content
	$current_line = fgets($file_handle);

	$user = explode(';', $current_line);
	// username : $user[0]
	// mail : $user[1]

	$tempUser['username'] = $user[0];
	$tempUser['mail'] = $user[1];

	$users[] = $tempUser;
}

echo '<pre>';
var_dump($users);
echo '</pre>';

fclose($file_handle);
	/*
		1. Read the file : 'users.txt'

		2. Retrieve, in PHP, all the users as an array.
		You should save username and email.

		$array = [
			0 => [
				'username' => 'blabla',
				'mail' => 'blabla@gmail.fr'
			],
			1 => [
				'username' => 'toto',
				'mail' => 'toto@gmail.fr'
			]
		 ];

		3. Display the array with a var_dump()
	 */