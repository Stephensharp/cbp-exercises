<?php
$pdo = new PDO('mysql:host=localhost;dbname=notes;charset=utf8', 'bootcamp', '');
if ($_POST) {
	if (!filter_var($_POST['username'], FILTER_VALIDATE_EMAIL)) {
		$errors[] = 'not a valid email';
	}
	if (empty($errors)) {
		$stmt = $pdo->prepare('INSERT INTO notes (title, note, created) VALUES (?, ?, NOW())');
		$stmt->execute(array($_POST['title'], $_POST['note']));
		header('Location: form.php');
	} else {
		foreach ($errors as $error) {
			echo '<p>' . htmlspecialchars($error) . '</p>';
		}
	}
}
?>
<form action="" method="post">
Title: <input type="text" name="title" value=""><br>
Email: <input type="text" name="email" value=""><br>
Note: <input type="text" name="note" value=""><br>
<input type="submit">
</form>
