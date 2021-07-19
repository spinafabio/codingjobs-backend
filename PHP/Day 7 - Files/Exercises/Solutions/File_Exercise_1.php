<?php

/*
		Create a script that saves in the last_access.log file the timestamp of this time (now).

		We will replace the old timestamp.

		Choose the right setting to open the file
	 */

//1. Get timestamp()
$timestamp = time();
$timestamp = strtotime('now');

//2. Open the file
$file_handle = fopen('last_access.log', 'w');
//3. Write timestamp in the file
fwrite($file_handle, 'Last access : ' . $timestamp);
