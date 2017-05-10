<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP Arrays</title>
</head>
<body>


<h2>Var_show<h2>
<?php require_once 'var_show.php'; ?>
<?php
require_once 'var_show.php';

$fruit = [
    0 => 'Apple',
    1 => 'Pear',
    2 => 'Orange'
];

$fruit_colors = [
    'Apple' => 'Red',
    'Pear' => 'Green',
    'Orange' => 'Orange'
];

var_show($fruit);

var_show($fruit_colors);

$cars_i_want = [];

// $another_empty = array(); same as above, old style



$cars_i_want = [
    'astonmartin',
    'bugatti',
    'ferrari',
    'lamborghini',
    'mercedes',
    'porsche',
    'maserati'
    ];
    $cars_i_want[] = 'skoda'; 

    var_show($cars_i_want);

echo    '<br>';
echo 'for myself i would buy ' . $cars_i_want[1] . '<br>';
echo 'for my spouse i would buy ' . $cars_i_want[3] . '<br>';
    $cars_i_want[4] = 'a tractor';
echo 'each of my kids would get ' . $cars_i_want[4] . '<br>';

    var_show($cars_i_want);

echo '<hr><h2>Foreach</h2>';

echo'<ul>';

foreach($cars_i_want as $brand) {

    echo '<li>' . $brand . '<li>';
    // code to run for each of the items in an array
    // the $value variable holds the value of the current item
}
echo '</ul>';




?>

</body>
</html>