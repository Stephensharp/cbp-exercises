<?php
$pdo = new PDO('mysql:host=localhost;dbname=bootcamp_notes;charset=utf8', 'bootcamp', '');

$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

if ($_POST) {
	$stmt = $pdo->prepare('INSERT INTO users (email, password) VALUES (?, ?)');
	$stmt->execute(array($_POST['email'], password_hash($_POST['password'], PASSWORD_DEFAULT)));
	header('Location: signup.php?status=ok');
	exit();
}
?>
<h1>Sign up</h1>
<form action="" method="post">
Email: <input type="text" name="email" value=""><br>
Password: <input type="text" name="password" value=""><br>
<input type="submit">
</form>
