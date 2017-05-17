<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Eshop - home</title>
</head>
<body>
<?php


define("CURRENCY", "EURO");

function print_price($value, $currency)
{
    switch($currency)
    {
        case 'USD':
            return $value * 0.9;
            break;
        case 'CZK':
            return $value * 0.038;
            break; 
    }
}


echo '<br>'.print_price(10, "USD"); // returns 3.937007874015748 (approximately)
echo '<br>'.print_price(10, "CZK"); // returns 25.4

// function exchangeRate( $amount, $from, $to)
// {
//     switch ($from) {
//         case "euro":
//             $from_Currency = "EUR";
//             break;
//         case "dollar":
//             $from_Currency = "USD";
//             break;
//         case "pounds":
//             $from_Currency = "GBP";
//             break;
//     }

//     switch ($to) {
//         case "euro":
//             $to_Currency = "EUR";
//             break;
//         case "dollar":
//             $to_Currency = "USD";
//             break;
//         case "pound":
//             $to_Currency = "GBP";
//             break;
//     }



?>
</body>
</html>