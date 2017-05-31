<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Eshop - home</title>
</head>
<body>
<?php


function print_price($value, $currency = 'EURO')
{
    if($currency == 'USD')
    {
        return $value . ' ' . $currency;
    }
    elseif($currency == 'EURO')
    {
        return  $value . ' ' . $currency;
    }
    else
    {
        return $value . ' ' . $currency;
        // return $weight * 0.45359237; // also possible
    }

    switch($currency)
    {
        case 'USD': 
            return $currency;
            break;
        case 'EURO': 
            return $currency;
            break;
        case 'CZK': 
            return $currency;
            break;    
        default:
            die('Unknown unit!');
            break;
    }
}

echo print_price(123);














// define("CURRENCY", "EURO");

// function printPrice($price = NULL)
// {

//     switch($currency)
//     {
//         case 'CURRENCY':
//             return $currency . 'USD';
//             break;
//         case 'CURRENCY':
//             return $currency . 'EURO';
//             break;
//         case 'CURRENCY':
//             return $currency . 'CZK';
//             break;
//     }
//     print ($price);
// }

// printPrice(10)










// function print_price($price)
// {
//     switch($currency)
//     {
//         case 'USD':
//             return $value * 0.9;
//             break;
//         case 'CZK':
//             return $value * 0.038;
//             break; 
//     }
// }


// echo '<br>'.print_price(10, "USD"); // returns 3.937007874015748 (approximately)
// echo '<br>'.print_price(10, "CZK"); // returns 25.4

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