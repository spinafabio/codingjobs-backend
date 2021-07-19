<?php
/*
// READ A FILE (but no format/no style)
$file_content = readfile('movies.txt');
echo $file_content;

// Count how many lines in the file :
$fileToArray = file('movies.txt');
echo count($fileToArray);
*/

// Check if the file exists
if (file_exists('movies.txt')) {

    /*
        1. Open the file 
        'r' : read mode
    */
    $file_handle = fopen('movies.txt', 'r');

    // 2. Read the file : Loop each line until I reach the end of the file (eof)
    while (!feof($file_handle)) {
        $current_line = fgets($file_handle);
        echo $current_line . '<br>';
    }

    // 3. Close the file
    fclose($file_handle);
}
