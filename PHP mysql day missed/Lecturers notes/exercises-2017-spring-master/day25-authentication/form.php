<?php
session_start();
if (empty($_SESSION['user'])) {
	header('Location: login.php');
	exit;
} else {
	echo 'Hello ' . htmlspecialchars($_SESSION['user']);
}
$pdo = new PDO('mysql:host=localhost;dbname=bootcamp_notes;charset=utf8', 'bootcamp', '');

$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$stmt = $pdo->prepare('SELECT id, name FROM tags');
$stmt->execute();
$tags = $stmt->fetchAll();

if ($_POST) {
	if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
		$errors[] = 'not a valid email';
	}
	if (empty($errors)) {
		$stmt = $pdo->prepare('INSERT INTO notes (title, note, created) VALUES (?, ?, NOW())');
		$stmt->execute(array($_POST['title'], $_POST['note']));
		$notesId = $pdo->lastInsertId();
		$stmt = $pdo->prepare('INSERT INTO notes_have_tags (id_notes, id_tags) VALUES (?, ?)');
		foreach ($_POST['tags'] as $tag) {
			$stmt->execute(array($notesId, $tag));
		}
		header('Location: form.php');
		exit();
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
<select name="tags[]" multiple>
	<?php
	foreach ($tags as $tag) {
		echo '<option value=' . $tag['id'] . '>' . $tag['name'] . '</option>';
	}
	?>
</select>
<input type="submit">
</form>

<?php
$stmt = $pdo->prepare('SELECT n.id, n.title, n.note, t.name FROM notes n
	JOIN notes_have_tags nht ON n.id = nht.id_notes
	JOIN tags t ON t.id = nht.id_tags');
$stmt->execute();
$notes = $stmt->fetchAll();

foreach ($notes as $note) {
	echo '<p><strong><a href="update.php?id=' . htmlspecialchars($note['id']) . '">' . htmlspecialchars($note['title']) . '</a>: ' . htmlspecialchars($note['note']) . '</strong>, tag: '
		. htmlspecialchars($note['name']) . '</p>';
}
?>
<a href="logout.php">Log out</a>