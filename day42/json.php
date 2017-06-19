<?php


// get the JSON data as an object 
// $object = json_decode($json_string);
        
// get the JSON data as an array
// $array = json_decode($json_string, true);

$data = array(
    'config' => array(
        'URL' => 'http://mysite.com',
        'host' => 'localhost',
        'port' => 80
    ),
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
);

$json_string = jason_encode($data);

file_put_contents('data.json', $json_string);