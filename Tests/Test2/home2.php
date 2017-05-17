<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Eshop - home</title>
</head>
<body>
<?php



define("CURRENCY", "EURO");

$price = print_price(123)


}

function exchangeRate( $amount, $from, $to)
{
    switch ($from) {
        case "euro":
            $from_Currency = "EUR";
            break;
        case "dollar":
            $from_Currency = "USD";
            break;
        case "pounds":
            $from_Currency = "GBP";
            break;
    }

    switch ($to) {
        case "euro":
            $to_Currency = "EUR";
            break;
        case "dollar":
            $to_Currency = "USD";
            break;
        case "pound":
            $to_Currency = "GBP";
            break;
    }

  $amount = urlencode($amount);

  $from_Currency = urlencode($from_Currency);
  $to_Currency = urlencode($to_Currency);
  $get = file_get_contents("https://www.google.com/finance/converter?a=$amount&from=" . $from_Currency . "&to=" . $to_Currency);

  $get = explode("<span class=bld>",$get);
  $get = explode("</span>",$get[1]);
  $converted_amount = preg_replace("/[^0-9\.]/", null, $get[0]);
  return round($converted_amount, 2);
}


?>
</body>
</html>