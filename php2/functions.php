<?php

function divmod($number1, $number2, & $number3)
{
    $number3 = $number1 % $number2;
 
    return $number1 / $number2;
}


$result = divmod(12, 5, $modulus);
echo $result .'<br';
echo $modulus;



echo '<hr>';

// function create_paragraph($contents, $class = "paragraph", $id = "") {
//     return '<p class="'.$class.'"'.($id?' id="'.$id.'"':'').'>'.$contents.'</p>';
// }

// create_paragraph('text inside paragraph');

// create_paragraph('text inside paragraph', 'p_class');

// create_paragraph('text inside paragraph', 'paragraph_class', 'paragraph_id');

echo '<hr>';




function convert_weight($weight, $unit = 'kg')
{
    if ($unit == 'kg')
    {
        return $weight * 2.20462262;
    }
    else ($unit == 'lb')
    {
        return $weight / 2.20462262;
    }
}
echo convert_weight(1, 'kg'); // 2.20462262
echo convert_weight(1, 'lb'); // 0.45359237
echo convert_weight(1); // 2.20462262

?> 

