<?php
$pdo = new PDO('mysql:host=localhost;dbname=notes;charset=utf8', 'root', 'rootroot');
var_dump($pdo);

if ($_POST) {
    $stmt = $pdo->prepare('INSERT INTO notes (title, note, email, created) VALUES (?, ?, ?, NOW())');
    $stmt->execute(array($_POST['title'], $_POST['note'], $_POST['email']));
    header('Location: notes2.php'); //issues a new page request upon submission to save resubmitting
    if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
    $errors[] = 'not a valid email'; 
    var_dump($_POST);
}
}
?>

<form action="" method="post"> 
    <label for"title">Title:</label> <input type="text" name="title" value="text">
    <br>
    <label for"note">Note:</label><textarea name="note" rows="10" cols="50">Content</textarea>
    <br>
    <label for"email">Email:</label> <input type="text" name="email" value="">
    <br>
<input type="submit" value="Submit this">
</form>

