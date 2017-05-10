<?php

if (empty($_POST)) {
    echo 'not a POST';
    exit();
}
$errors = array();

if (empty($_POST['name'])) {
    $errors[] = 'empty name';
}
if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
    $errors[] = 'not a valid email';
}
if (empty($errors)) {
    $foo = $_POST['name'];
    // echo htmlspecialchars($foo);
    header('Location: form.php?status=ok');
    exit();
    // as above the return header to take back to the original page with message etc cannot be used if there is an echo present
}
else {
    foreach ($errors as $error) {
        echo '<p>' . htmlspecialchars($error) . '</p>';
    }
}
if (ctype_digit($_POST['budget'])) {
    $errors[] = 'not a number';
}
// isset does not check if its empty whereas empty does as per above
// var_dump($_POST);

// echo $_POST['email'];
// echo htmlspecialchars($_POST['email']);
// htmlspecialchars changes < and > for the sake of security. always use this.
?>
