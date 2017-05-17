<?php

$pdo = new PDO('mysql:host=localhost;dbname=siteinduction;charset=utf8', 'root', 'rootroot');
var_dump($pdo);

if ($_POST) {
    $stmt = $pdo->prepare('INSERT INTO sitestaff (name, age, dob, gender, email, company, trade, inducted, inductiondate, comment, created) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, NOW())');
    $stmt->execute(array($_POST['name'], $_POST['age'], $_POST['dob'], $_POST['gender'], $_POST['email'], $_POST['company'], $_POST['trade'], $_POST['inducted'], $_POST['inductiondate'], $_POST['comment']));
    header('Location: index.php'); //issues a new page request upon submission to save resubmitting
    if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
    $errors[] = 'not a valid email'; 
    var_dump($_POST);
}
}




// define('DATA_DIR', realpath(dirname(__FILE__).'/../data'));

// $_data_index = null;


// function get_index()
// {
//     load_index();

//     global $_data_index;

//     return $_data_index;
// }

// function save_index()
// {
//     load_index();

//     global $_data_index;

//     $fh = fopen(DATA_DIR.'/index.csv', 'w');

//     foreach($_data_index as $id => $name)
//     {
//         fputcsv($fh, array($id, $name), ';', '"');
//     }
//     fclose($fh);
// }


// if ($_POST) {
//     var_dump($_POST);
// }

// function insert_data($data = array())
// {
//     return update_data(null, $data);
// }






?>
