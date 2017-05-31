<?php
if (empty($_POST)) {
	echo 'not a POST';
	exit();
}

$errors = array();

if (empty($_POST['username'])) {
	$errors[] = 'empty username';
}

if (!filter_var($_POST['username'], FILTER_VALIDATE_EMAIL)) {
	$errors[] = 'not a valid email';
}

if (!ctype_digit($_POST['amount'])) {
	$errors[] = 'not a number';
}

if (empty($errors)) {
	$foo = $_POST['username'];
	// echo htmlspecialchars($foo);
	// verify password or save data or something
	header('Location: form.php?status=ok');
	exit();
} else {
	foreach ($errors as $error) {
		echo '<p>' . htmlspecialchars($error) . '</p>';
	}
}


