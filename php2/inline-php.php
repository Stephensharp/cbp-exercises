<?php
 // logic & code to retrieve and prepare the data
// calculations, operations that can produce errors .....
 // also handle form submission, saving data to database etc.
   $user_is_admin = false;
    $names = ['Bruce Wayne', 'Clark Kent', 'Tony Stark', 'Peter Parker'];
    $vehicles = [
    'Bicycle' => 50,
    'Car' => 150,
    'Train' => 110
];
    $messages = [
    'Preparing to do some stuff...',
    'Doing amazing stuff...',
    'Stuff is done.'
];
?> 


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<style>
.board .row {
    overflow: hidden;
}
.board .row > div {
    float: left;
    width: 3em;
    height: 3em;
}
.board .black {
    background-color: #000000;
}
</style>
<body>
<ul class="menu">
    <li><a href="#">Home</a></li>
    <li><a href="#">Eshop</a></li>
    <li><a href="#">Contact</a></li>
    <?php if ($user_is_admin) : ?>
    <li><a href="#">Link just for administrators</a></li>
    <li><a href="#">Another link just for administrators</a></li>
    <?php endif; ?>
</ul>

<?php foreach($names as $nr => $name) : ?>

  <div class="name">
    <?php echo $nr.'. '.$name; ?>
  </div>

<?php endforeach; ?>



<table>
    <tr>
        <th>Means of transport</th>
        <th>Max. speed (km/h)</th>
    <tr>
        <?php foreach($vehicles as $vehicle_name => $top_speed) : ?>

    <tr>
        <td><?php echo $vehicle_name; ?></td>
        <td><? $top_speed; ?></td>
    </tr>
</table>
<?php endforeach; ?>


<ul class="messages" style="padding: 1em; border: 1px solid black; margin: 1em;">
            <?php foreach($messages as $nr => $text) : ?>
    <li><? $text;?></li>
    <?php endforeach; ?>
</ul>



<div class="board">  

    <?php for($i = 0; $i < 8; $i++) : ?>
        <div class="row" style="height: 3em; width: 24em; border: 1px solid #c7c7c7">

            <?php for($j = 0; $j < 8; $j++) : ?>

                <?php if($j % 2 == $i % 2) : ?>
                    <dic class="white"></div>
                <?php else : ?>
                    <div class="black"></div>
            <?php endif; ?>



            <?php endfor; ?>
            
        </div>
      
    <?php endfor; ?>

     </div>
</body>
</html>