<?php


class Log
{

    // Should display current date : '2021-04-26 14:00:03 - Accessing file'
    public static function saveLog()
    {
        $fHandle = fopen('myfile.txt', 'w');
        fwrite($fHandle, (date('Y-m-d H:m:s') . ' - Accessing file'));
    }
}

Log::saveLog();