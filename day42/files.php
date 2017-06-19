<?php

var_dump(__FILE__);

var_dump(__DIR__);


var_dump (pathinfo(__FILE__));

var_dump (pathinfo(__FILE__, PATHINFO_EXTENSION));

if(pathinfo(__FILE__, PATHINFO_EXTENSION) == 'php'){
    echo 'this is a php file';
}

var_dump (dirname(__FILE__));

var_dump (basename(__FILE__));

var_dump (scandir(__DIR__));

function count_php_files_in_folder($folder_path)
{
    $files_in_folder = scandir($folder_path);
    var_dump($files_in_folder);

    foreach($files_in_folder as $file)
    {
        if($file == '.' || $file == '..') continue;

        if(pathinfo($file, PATHINFO_EXTENSION) == 'php')
        {
            $counter++;
        }
    }

    return $counter;
}

echo count_php_files_in_folder(__DIR__); //1

$dir_handle = opendir(C:\projects\codingbootcamp\exercises\day42)