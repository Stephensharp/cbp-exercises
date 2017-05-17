<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PRODUCT</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
<?php
if (isset($_GET['status']) && $_GET['status'] == 'ok') {
	echo '<p>Submitted</p>';
}

if ($_POST) {
    var_dump($_POST);
}
?>
<form action="cart.php" method="post">  
    <label for"product_id">Product ID:</label><input type="int" name="product_id" value="product_id">
    <br>
    <br>
    <label for"amount">Amount:</label><input type="number" name="amount" value="yes">
    <br>
    <br>
    <label for"color">Color:</label>
    <input type="radio" name="gender"  value="blue">Blue
    <input type="radio" name="gender"  value="black">Black
    <br>
    <br>
    Size: <select name="size">
    <option value="1">XS</option>
    <option>S</option>
    <option>L</option>
    <option>XL</option>
    <option>XXL</option>
    </select>
    <br>
    <br>
    <label for"checkout">Checkout:</label>
    <input type="checkbox" name="checkout" checked="unchecked" value="yes">
    <br>
    <br>
    <input type="submit" value="submit">
</form>
</div>
</body>
</html>