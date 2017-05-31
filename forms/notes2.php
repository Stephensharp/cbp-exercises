
<!--below is the code for adminer (mysql) to join the 3 tables - dont 
wory about it for this page - just needed this record somewhere
..........................................................
SELECT * FROM notes
JOIN notes_have_labels ON notes.id = notes_have_labels.id_notes
JOIN labels ON labels.id = notes_have_labels.id_labels
.........................................................-->

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

$stmt = $pdo->prepare('SELECT id, label FROM labels'); //takes the data from tables table in the same database
$stmt->execute();
$tags = ($stmt->fetchAll());

if ($_POST) {
    var_dump($_POST);
        if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
        $errors[] = 'not a valid email'; 
        }
        if (empty($errors)) {
        $stmt = $pdo->prepare('INSERT INTO notes (title, note, email, created) VALUES (?, ?, ?, NOW())');
        $stmt->execute(array($_POST['title'], $_POST['note'], $_POST['email']));
        $notesId = $pdo->lastInsertId();
        $stmt = $pdo->prepare('INSERT INTO notes_have_labels (id_notes, id_labels) VALUES (?, ?)');
        foreach ($_POST['labels'] as $tag) {
            $stmt->execute(array($notesId, $tag));
        }
        header('Location: notes2.php'); //issues a new page request upon submission to save resubmitting
        } else {
            foreach ($errors as $error) {
                echo '<p>' . htmlspecialchars($error) . '</p>';
            }
    }
}

$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); //checks the database for reasons why its not working.

?>
<div class="form-style-5">

<h2>NOTES</h2>
<form action="" method="post"> 
    <label for"title">Title:</label> <input type="text" name="title" value="text">
    <br>
    <label for"note">Note:</label><textarea name="note" rows="10" cols="50">Content</textarea>
    <br>
    <label for"email">Email:</label> <input type="text" name="email" value="">
    <br>
    <select name="labels[]" multiple>
                <br>
        <br>
        <h2>Tags:</h2>
        <?php
        foreach ($tags as $tag) {
            echo "<option value={$tag['id']}>{$tag['label']}</option>"; //adds the data from the array and drops it in the notes form under categories.
        }
        ?>

        <option>todo</option>
        <option>shopping</option>
        <option>kids</option>
        <option>wife</option>
        <option>work</option>
        <option>house</option>
        <option>car</option>
        <option>music</option>
        <option>gym</option>

<input type="submit" value="Submit this">
</form>
</div>

<?php

$stmt = $pdo->prepare('SELECT * FROM notes
JOIN notes_have_labels ON notes.id = notes_have_labels.id_notes
JOIN labels ON labels.id = notes_have_labels.id_labels');
$stmt->execute();
$tags = ($stmt->fetchAll());
        foreach ($tags as $tag) {
            echo $tag['note']. ' : ' .$tag['label']; //adds the data from the array and drops it in the notes form under categories.
            echo '<br>';}
        ?>



<!--SELECT * FROM notes
JOIN notes_have_labels ON notes.id = notes_have_labels.id_notes
JOIN labels ON labels.id = notes_have_labels.id_labels-->


</body>
</html>

            