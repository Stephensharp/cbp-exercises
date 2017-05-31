<?php

require 'giraffe.php';

$first_giraffe = new giraffe('Mickey', 'meadow');
$first_giraffe->eat();
$first_giraffe->sleep();

var_dump($first_giraffe);

$second_giraffe = new giraffe('Todd');
$second_giraffe->drink();

var_dump($first_giraffe);
var_dump($second_giraffe);

$nr_of_giraffes = giraffe::getNrOfGiraffes();
var_dump($nr_of_giraffes);

$nr_of_giraffes_in_forest = giraffe::getNrOfGiraffesInForest();
var_dump($nr_of_giraffes_in_forest);

