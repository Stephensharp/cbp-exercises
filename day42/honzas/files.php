<?php

// FILES

var_dump(   __FILE__   );

var_dump(   __DIR__   );

var_dump(   pathinfo(__FILE__)   );

var_dump(   pathinfo(__FILE__, PATHINFO_EXTENSION)   );

if(pathinfo(__FILE__, PATHINFO_EXTENSION) == 'php')
{
    echo 'This is a php file!';
}

var_dump(    dirname(__FILE__)   );
var_dump(    basename(__FILE__)   );


// DIRECTORIES

var_dump(    scandir(__DIR__)    );

/**
 * returns number of php files in a certain folder
 */
function count_php_files_in_folder($folder_path)
{
    $files_in_folder = scandir($folder_path);

    $counter = 0;
    foreach($files_in_folder as $file)
    {
        // skip . and ..
        if($file == '.' || $file == '..') continue;
        
        // if the extension of the file is php
        if(pathinfo($file, PATHINFO_EXTENSION) == 'php')
        {
            // raise the counter
            $counter++;
        }
    }

    // return the counter
    return $counter;
}

echo count_php_files_in_folder(__DIR__); // 2  

$dir_handle = opendir('C:\web\codingbootcamp\exercises-cbp\day42');

$next_file = readdir($dir_handle);
var_dump($next_file);
$next_file = readdir($dir_handle);
var_dump($next_file);
$next_file = readdir($dir_handle);
var_dump($next_file);

closedir($dir_handle);

function count_files_in_folder($folder_path, $extension)
{
    $dh = opendir($folder_path);

    $counter = 0;

    while($file = readdir($dh))
    {
        // skip . and ..
        if($file == '.' || $file == '..') continue;
        
        // if the extension of the file is $extension
        if(pathinfo($file, PATHINFO_EXTENSION) == $extension)
        {
            // raise the counter
            $counter++;
        }
    }

    closedir($dh);

    // return the counter
    return $counter;
}

echo count_files_in_folder(__DIR__, 'php'); // 2

//mkdir('data/path/to/some/folder/that/is/very/deep', 0755, true);

// rmdir('data');
// mkdir('data');
var_dump(    is_dir('data')    );

// FILE FUNCTIONS

var_dump(    file_exists('data')    );

// $fh = fopen('files.php', 'r');


// while($line = fgets($fh))
// {
//     echo $line;
// }

// fclose($fh);

// $fh = fopen('csv.php', 'a');

// fwrite($fh, "<?php \r\n echo 'Hello, world!';");

// fclose($fh);

$array_of_lines = file('files.php');
//var_dump($array_of_lines);

$contents_of_file = file_get_contents('yaml.yml');
//var_dump($contents_of_file);

$contents_of_file .= '|switch';

//file_put_contents('yaml.yml', $contents_of_file);

$me = [
    'name' => 'Jan',
    'surname' => 'Polak'
];

file_put_contents('me.json', json_encode($me));

// delete a file
unlink('me.json');