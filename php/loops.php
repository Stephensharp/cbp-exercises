<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP Conditions</title>
</head>
<body>


<h2>while<h2>
<?php
$time_served = 0;
while($time_served < 10) {
    $time_served++;
    echo 'the prisoner has served ' .  $time_served .' years<br>';
}
?>


<h2>do while<h2>
<?php
$time_served = 0;
do {
    $time_served++;
    echo 'the prisoner has served ' .  $time_served .' years<br>';
   }   while($time_served < 10);
?>

<h2>for<h2>
<?php

for($i = 10; $i >= 0; $i--) {
        echo 'the prisoner has ' . ($i) . ' more years to serve.<br>';
if($i > 5) {
        continue; 
        
    }
    echo 'Going to a parole hearing...<br>';
    if($i == 2) 
    {
        echo 'paroled!';
        break;
    }
    echo 'Parole denied.<br';
}

?>




</body>
</html>