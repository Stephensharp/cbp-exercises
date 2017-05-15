<?php
if (isset($_GET['status']) && $_GET['status'] == 'ok') {
	echo '<p>OK COOL</p>';
}

if ($_POST) {
    var_dump($_POST);
}
?>
<form action="submit.php" method="post">
<label for="username">title</label>
<input type="text" name="title" id="title" required>
<br>

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







<!--<label for="password">Password:</label>
<input type="password" name="password" id="password">
<br>
Amount: <input type="text" name="amount">-->
<input type="submit" value="Submit this">
</form>
