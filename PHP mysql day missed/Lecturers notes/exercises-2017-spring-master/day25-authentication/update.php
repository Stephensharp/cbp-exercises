<?php
session_start();
if (empty($_SESSION['user'])) {
	header('Location: login.php');
	exit;
}

$pdo = new PDO('mysql:host=localhost;dbname=bootcamp_notes;charset=utf8', 'bootcamp', '');

$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

if ($_POST) {
	$stmt = $pdo->prepare('UPDATE notes SET title = ?, note = ? WHERE id = ?');
	$stmt->execute(array($_POST['title'], $_POST['note'], $_GET['id']));
	header('Location: form.php');
	exit;
}

$stmt = $pdo->prepare('SELECT title, note FROM notes WHERE id = ?');
$stmt->execute(array($_GET['id']));
$note = $stmt->fetch();
?>
<form action="" method="post">
Title: <input type="text" name="title" value="<?php echo htmlspecialchars($note['title']); ?>"><br>
Note: <input type="text" name="note" value="<?php echo htmlspecialchars($note['note']); ?>"><br>
<input type="submit">
</form>
