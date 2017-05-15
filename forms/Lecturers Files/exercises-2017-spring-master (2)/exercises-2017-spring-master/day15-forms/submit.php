<?php

if ($_POST) {
    var_dump($_POST);
}

if (empty($_POST)) {
	echo 'not a POST';
	exit();
}

$errors = array();

if (empty($_POST['title'])) {
	$errors[] = 'empty title';
}

// if (!ctype_digit($_POST['amount'])) {
// 	$errors[] = 'not a number';
// }

if (empty($errors)) {
	$foo = $_POST['title'];
	// echo htmlspecialchars($foo);
	// verify password or save data or something
	header('Location: form.php?status=ok');
	exit();
} else {
	foreach ($errors as $error) {
		echo '<p>' . htmlspecialchars($error) . '</p>';
	}
}

?>


