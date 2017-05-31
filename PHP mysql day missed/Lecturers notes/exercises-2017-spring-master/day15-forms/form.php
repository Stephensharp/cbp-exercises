<?php
if (isset($_GET['status']) && $_GET['status'] == 'ok') {
	echo '<p>OK COOL</p>';
}
?>
<form action="submit.php" method="post">
<label for="username">* Email:</label>
<input type="email" name="username" id="username" required>
<br>
<label for="password">Password:</label>
<input type="password" name="password" id="password">
<br>
Amount: <input type="text" name="amount">
<input type="submit" value="Submit this">
</form>
