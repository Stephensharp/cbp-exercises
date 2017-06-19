<?php 

$data = array(
    array('Bob', 'Huffy', '1982', 'fighter pilot'),
    array('Anna', 'Smith', '1986', 'waitress')
);

$fh = fopen('csv.csv', 'a');

foreach($data as $row)
{
    // fputcsv($fh, $row, ';', '"');
}

fclose($fh);


$fh = fopen('csv.csv', 'r');

$read_data = [];
while($row = fgetcsv($fh, 0, ';', '"'))
{
    $read_data[] = $row;
}

fclose($fh);

var_dump($read_data);