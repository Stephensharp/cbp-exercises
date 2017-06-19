<?php

$contents_of_ini_file = file_get_contents('data.ini');

$data = parse_ini_string($contents_of_ini_file);

$data = parse_ini_file('data.ini', false);

var_dump($data);