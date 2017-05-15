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
if (empty($_POST['date'])) {
    $errors[] = 'empty date';
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
// if (ctype_digit($_POST['budget'])) {
//     $errors[] = 'not a number';
// }
// isset does not check if its empty whereas empty does as per above
// var_dump($_POST);

// echo $_POST['email'];
// echo htmlspecialchars($_POST['email']);
// htmlspecialchars changes < and > for the sake of security. always use this.
?>
