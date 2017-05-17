<?php

if ($_POST) {
    var_dump($_POST);
}

if (empty($_POST)) {
	echo 'not a POST';
	exit();
}

$errors = array();

if (empty($_POST['product_id'])) {
	$errors[] = 'empty product_id';
}

if (empty($errors)) {
	$foo = $_POST['product_id'];
	header('Location: product.php?status=ok');
	exit();
} else {
	foreach ($errors as $error) {
		echo '<p>' . htmlspecialchars($error) . '</p>';
	}
}

?>


