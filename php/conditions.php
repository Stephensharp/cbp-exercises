<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP Conditions</title>
</head>
<body>

<?php

define('MY_OS', 'Linux');

switch(MY_OS) {
    case 'Windows':
   echo 'Edge';
    break; // mandatory
    case 'Linux':
 echo 'Firefox';
    break;
    case 'OS_X':
echo 'safari';
    break;
    default:
    echo 'just use chrome';
    break;
}

//similar outcome below to above. use above first
if(MY_OS =='Windows') {
echo 'edge';
}
elseif(MY_OS =='Linux') {
echo 'firefox';
}
elseif(MY_OS =='OS_X') {
echo 'safari';
}
else {
    echo 'just use chrome';
    }

?>
<br>
<h2>age gender employed<h2>
<?php
$age = 35;
$gender = 'male';
$employed = 'true';


if($age > 35)
{
echo 'age is greater than 35';
}
if($employed == true)
{
echo 'if employed';
}
if($age <= 18) 
{
echo 'age is not greater than 18';
}
if($age < 12 && $gender == 'female')
{
echo 'the age is lower than 12 and gender is female';
}
if($age >= 18 && !$employed) 
{
echo 'age is greater or equal to 18 and is not employed';
}
if($age >= 60 && $employed && $gender == 'female')
{
echo 'age is greater or equal to 60, is employed and is a female';
}
if(($gender == 'male' && $age > 20) || (!$employed && $gender == 'female')) 
{
echo '(someone) is a male above 20 or is an unemployed female above 2';
}




?>

</body>
</html>