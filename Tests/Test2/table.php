<?php 

$books = array(
    array(
        'author' => 'Milo Yiannopoulos',
        'title' => 'Dangerous',
        'price' => '$15.62'
    ),
    array(
        'author' => 'Margaret Atwood',
        'title' => 'The Handmaid\'s Tale',
        'price' => '$8.69'
    ),
    array(
        'author' => 'George Orwell',
        'title' => '1984',
        'price' => '$7.09'
    ),
    array(
        'author' => 'Rupi Kaur',
        'title' => 'Milk and Honey',
        'price' => '$8.99'
    ),
    array(
        'author' => 'Neil Gaiman',
        'title' => 'Norse Mythology',
        'price' => '$15.57'
    )
);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Books</title>
</head>
<body>
    
    <?php
    function build_table($books){
    $html = '<table border="1">';
    $html .= '<tr>';
    foreach($books[0] as $key=>$value){
            $html .= '<th>' . htmlspecialchars($key) . '</th>';
        }
    $html .= '</tr>';

    foreach( $books as $key=>$value){
        $html .= '<tr>';
        foreach($value as $key2=>$value2){
            $html .= '<td>' . htmlspecialchars($value2) . '</td>';
        }
        $html .= '</tr>';
    }

    $html .= '</table>';
    return $html;
}

echo build_table($books);
?>


</body>
</html>