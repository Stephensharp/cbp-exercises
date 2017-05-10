<?php
function vdump($variable)
{
    echo nl2br(var_export($variable, true));
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP Request</title>
</head>
<body>



<?php  vdump($_GET);
?>
<br>
<?php   vdump($_POST);
?>
<br>
<?php  vdump($_SERVER);
?>

<h1>hello,<?php echo $_GET['name']; ?> !</h1>

<?php vdump(parse_url($_SERVER['REQUEST_URI'])); ?>

<nav>
    <a href="">home</a>
        <a href="?page=form">forms</a>
        </nav>

<?php if(isset($_GET['page']) && $_GET['page']=='form') : ?>
    <?php include('forms.php'); ?>
<?php else : ?>
    This is home.
<?php endif; ?>
</body>
</html>