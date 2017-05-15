<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/notes.css">
    <title>Document</title>
</head>
<body>


<?php
if (isset($_GET['status']) && $_GET['status'] == 'ok') {
    echo '<p></p>';

    
}
?>

<form action="submitnotes.php" method="post"> 
    <label for"title">Title:</label> <input type="text" name="title" value="text">
    <br>
    <label for"radio">Type</label>
    <input type="radio" name="contact" value="choose"> <label for"todo">Todo</label>
    <input type="radio" name="contact" value="choose">  <label for"choose">Note</label>
    <br>
    <label for"note">Note:</label><textarea name="note" rows="10" cols="50">Content</textarea>
    <br>
    <label for"date">Complete by:</label> <input type="date" name="date" value="date" required>
    <br>
    <label for"updates">Would you like to be sent a reminder</label>
    <input type="checkbox" name="updates" checked="checked" value="yes">
    <br>
    <label for"date">Reminder Date:</label> <input type="date" name="date" value="date" required>
    <br>
    <br>

    <br>

    <input type="submit" value="submit">
</form>
    
</body>
</html>

<!--https://nghttp2.org/httpbin/post-->