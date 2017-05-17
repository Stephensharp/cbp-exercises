<?php

$course_name = 'codingbootcamp';
$my_name = 'stephen';
$result = 11-3;
$instructors = [ 'jan', 'daniel', 'michael', 'jacob' ];

function greet_me(){
    echo 'good morning prague!';
}

greet_me();

$my_greeting = 'good morning ' . $my_name;

echo $my_greeting;

sort($instructors);

$name = 'prague';

foreach ($instructors as $name){
 echo greet_someone($name);
}

echo $name;

function greet_someone($name)
{
   return 'good morning ' . $name;
}