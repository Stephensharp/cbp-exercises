<?php
session_start();
if (empty($_SESSION['user'])) {
	header('Location: login.php');
	exit;
}

$pdo = new PDO('mysql:host=localhost;dbname=bootcamp_notes;charset=utf8', 'bootcamp', '');

$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

if ($_POST) {
	if (empty($errors)) {
		$stmt = $pdo->prepare('INSERT INTO tags (name) VALUES (?)');
		$stmt->execute(array($_POST['name']));
		header('Location: form.php');
		exit();
	} else {
		foreach ($errors as $error) {
			echo '<p>' . htmlspecialchars($error) . '</p>';
		}
	}
}
?>

<h2>Create new tag</h2>
<form action="" method="post">
Tag: <input type="text" name="name" value=""><br>
<input type="submit">
</form>
