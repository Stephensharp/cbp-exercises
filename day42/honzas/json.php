<?php

// $json_string = json_encode($data);
// $data = json_decode($json_string);

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

// encode the data into JSON
$json_string = json_encode($data);

// put the encoded string into data.json file
// file_put_contents('data.json', $json_string);

// get the JSON string from the file
$json_string = file_get_contents('data.json');

// get the data from the JSON string as object stdClass
$read_data_object = json_decode($json_string);

var_dump($read_data_object);
echo $read_data_object->config->URL;

// get the data from the JSON string as assoc. array
$read_data_array = json_decode($json_string, true);

var_dump($read_data_array);
echo $read_data_array['config']['URL'];

