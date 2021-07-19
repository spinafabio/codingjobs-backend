<?php

/*
    Open file :
    'r' : read mode
    'w' : write mode
    'a' : append mode
*/

// Write mode will override the content of the file
$file_handle = fopen('books.txt', 'a');

// Write into the file
// \n to go to the next line
fwrite($file_handle, "Another content!\n");

fclose($file_handle);
