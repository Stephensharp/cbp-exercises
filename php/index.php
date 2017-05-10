<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>php</title>
       <?php require_once 'functions.php'; ?>
</head>
<body>

    <?php 
    
    
    echo '123<h1> a warning </h1>';
    
     ?>

<h2>
    <?php
    $greeting = 'hello to the world!';
    // now i have a $greeting variable declared and initialised with a value
    ?>
    <?php echo $greeting; ?>
    <?= 'hello again. ' ?>
    </h2>


   <?php include 'footer.php'; ?>

</body>
</html>