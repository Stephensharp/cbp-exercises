<?php
session_start();
$pdo = new PDO('mysql:host=localhost;dbname=bootcamp_notes;charset=utf8', 'bootcamp', '');

// $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

if ($_POST) {
	$stmt = $pdo->prepare('SELECT * FROM users WHERE email = ?');
	$stmt->execute(array($_POST['email']));
	$row = $stmt->fetch();
	if (password_verify($_POST['password'], $row['password'])) {
		session_regenerate_id();
		$_SESSION['user'] = $row['email'];
		header('Location: form.php');
		exit;
	}
}
?>
<h1>Login</h1>
<form action="" method="post">
Email: <input type="text" name="email" value=""><br>
Password: <input type="text" name="password" value=""><br>
<input type="submit">
</form>
