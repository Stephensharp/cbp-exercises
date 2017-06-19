<?php

require_once 'Spyc.php';

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

$yaml_string = Spyc::YAMLDump($data, 2);

// file_put_contents('data.yml', $yaml_string);

$read_data = Spyc::YAMLLoad('data.yml');

var_dump($read_data);