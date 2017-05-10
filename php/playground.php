<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP Playground</title>
</head>
<body>

<?php

$first_name = 'stephen';
$second_name = 'sharp';
$year_of_birth = 1980;
$height = 187;
?>

First name: <?php echo $first_name; ?><br>
Second name: <?php echo $second_name; ?><br>
YOB: <?php echo $year_of_birth; ?><br>
height: <?php echo $height; ?><br>

<?php
$first_name_as_integer = (integer)$first_name;
    var_dump($first_name_as_integer);
$first_name_as_boolean = (boolean)$first_name;
    var_dump($first_name_as_boolean);
$height_as_string = (string)$height;
    var_dump($height_as_string);
?>

<?php

// $my_var /=3;

//see classes for more

$greeting = 'hello, ' . 'world!';
$greeting; // 'hello, world!'

$celsius = 36;
$fahrenheit = (9/5) * $celsius + 32;

var_dump($fahrenheit);

echo $fahrenheit;

$variable = 1;
$variable_is_odd = $variable % 2;
echo $variable_is_odd ? 'odd' : 'true';

$variable = 4;
$variable_is_odd = $variable % 2;
echo $variable_is_odd ? 'odd' : 'true';

var_dump($variable % 2);
var_dump((boolean)$variable % 2);
?>

<?php

// function celsius_to_fahrenheit(celsius)

?>
<?php
define('MY_OS', 'windows');
?>
My Operating System is <?php echo MY_OS; ?>
<br>
<br>



<?php $variable = '123'; ?>
<?php echo 'the type of ' . $variable . ' is ' . gettype($variable);?>
<br>
<?php $variable = 123; ?>
the type of <?php echo $variable; ?> is <?php echo gettype($variable);?>
<br>
<?php $variable = '123 Times Square'; ?>
the type of <?php echo $variable; ?> is <?php echo gettype($variable);?>
<br>
<?php $variable = 12.3; ?>
the type of <?php echo $variable; ?> is <?php echo gettype($variable);?>
<br>
<?php $variable = true; ?>
the type of <?php echo $variable; ?> is <?php echo gettype($variable);?>
<br>
<?php $variable = 'true';?>
the type of <?php echo $variable; ?> is <?php echo gettype($variable);?>
<br>

<?php
// variable dump and die function
function dd($variable){
    var_dump($variable);
    die();
}
?>

<!--stops running any further, die and exit use for debugging-->
<?php die(); ?> 
<?php exit(); ?>

<?php var_dump([1, 2, 3]); ?>


<hr>
<?php







?>



</body>
</html>