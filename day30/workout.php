
<?php

// 1.
$decimal = 12.6666;

// 2.
$country_names = [
    'cz' => 'Czechia',
    'de' => 'Germany',
    'fr' => 'France'
];

// 3.
$this_country = $country_names['cz'];

// 4.
$country_gdp = [
    'cz' => 189982000000,
    'de' => 3371000000000,
    'fr' => 2422000000000
];

// 5.
$money = 123456789000000;

var_dump($money);

// 6. 
echo 'The amount is ' . $money . ' USD<br>';

// 7. 
echo 'The amount is ' . $money/1000 . ' thousand USD<br>';

// 7b. 
echo 'The amount is ' . $money/1000000 . ' million USD<br>';

// 8.
echo 'The amount is ' . $money/1000000000 . ' billion USD<br>';

// 9.
echo 'The amount is close to ' . round($money/1000000000000) . ' trillion USD<br>';

// 10.
echo 'The amount is under ' . ceil($money/1000000000) . ' billion USD<br>';

// 11.

foreach($country_names as $country_code => $country_name){

}
    $one_country_gdp = $country_gdp[$country_code];
    <li>Nominal GDP value of Czechia is $ 189.982 billion</li>
    php endforeach;
