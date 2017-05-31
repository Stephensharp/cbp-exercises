<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>sitestaff</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>




<?php
$pdo = new PDO('mysql:host=localhost;dbname=notes;charset=utf8', 'root', 'rootroot');
var_dump($pdo);

if ($_POST) {
    $stmt = $pdo->prepare('INSERT INTO labels (label) VALUES (?)');
    $stmt->execute(array($_POST['label']));
    header('Location: notes2label.php'); //issues a new page request upon submission to save resubmitting
    // if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
    // $errors[] = 'not a valid email'; 
    var_dump($_POST);
}

?>
<div class="form-style-5">

<h2>LABEL</h2>
<form action="" method="post"> 
    <label for"label">Label:</label> <input type="text" name="label" value="text">
    <br>
    <input type="submit" value="Submit this">
    <!--<label for"note">Note:</label><textarea name="note" rows="10" cols="50">Content</textarea>
    <br>
    <label for"email">Email:</label> <input type="text" name="email" value="">
    <br>
<input type="submit" value="Submit this">
</form>

<form action="" method="post"> 
    Label: <select name="label">
    <option value="1">l1</option>
    <option>l2</option>
    <option>l3</option>
    <option>l4</option>
    <option>l5</option>
    </select>
    <br>
<input type="submit" value="Submit this">-->
</form>
</div>
</body>
</html>
