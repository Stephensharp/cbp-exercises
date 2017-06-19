<?php

$data = [
    'config' => [
        'URL' => 'http://mysite.com',
        'host' => 'localhost',
        'port' => 80
    ],
    'environment' => 'development',
    'info' => array(
        'contact' => array(
            array(
                'name' => 'Steve',
                'position' => 'owner'
            ),
            array(
                'name' => 'Bob',
                'position' => 'developer'
            )
        ),
        'address' => 
'Data4You
Krakovská 9,
Praha 1',
        'established' => 2015
    )    
];

// create PHP code from the data array
$php_code = var_export($data, true);

$php_code = '<?php
$data = '.$php_code.';';

// put the code in a PHP file
file_put_contents('data.php', $php_code);


include 'data.php';

var_dump($data);