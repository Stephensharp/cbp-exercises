<?php
if (!empty($_GET['nr_of_dice']))

{
    $nr_of_dice_to_roll = ($_GET) int ('nr_of_dice')

?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>


<?php
// echo(rand(1,6));
?>

 <form action="" method="get"> 
    nr_of_dice <input type="text" name="name" value="">
    <br>

    <br>
    <input type="submit" value="submit this">
    <br>
</form>


</body>
</html>