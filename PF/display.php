<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>sitestaff</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
<?php require_once 'lib/data-functions.php'; ?>
<?php 

// define('DATA_DIR', realpath(dirname(__FILE__).'/../data')); 

// $_data_index = null;


$host    = "localhost";
$user    = "username_here";
$pass    = "password_here";
$db_name = "database_name_here";

//create connection
$pdo = new PDO('mysql:host=localhost;dbname=siteinduction;charset=utf8', 'root', 'rootroot');
// var_dump($pdo);

//test if connection failed
if(mysqli_connect_errno()){
    die("connection failed: "
        . mysqli_connect_error()
        . " (" . mysqli_connect_errno()
        . ")");
}

//get results from database
$result = PDO_query($connection,"SELECT * FROM sitestaff");
$all_property = array();  //declare an array for saving property

//showing property
echo '<table class="data-table">
        <tr class="data-heading">';  //initialize table tag
while ($property = PDO_fetch_field($result)) {
    echo '<td>' . $property->name . '</td>';  //get field name for header
    array_push($all_property, $property->name);  //save those to array
}
echo '</tr>'; //end tr tag

//showing all data
while ($row = PDO_fetch_array($result)) {
    echo "<tr>";
    foreach ($all_property as $item) {
        echo '<td>' . $row[$item] . '</td>'; //get items using property value
    }
    echo '</tr>';
}
echo "</table>";
?>

<!--$pdo = new PDO('mysql:host=localhost;dbname=siteinduction;charset=utf8', 'root', 'rootroot');
var_dump($pdo);

$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); //this checks whats wrong with the mysql dump

if ($_POST) {
    $stmt = $pdo->prepare('INSERT INTO sitestaff (name, age, dob, gender, email, company, trade, inducted, inductiondate, comment, created) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, NOW())');
    $stmt->execute(array($_POST['name'], $_POST['age'], $_POST['dob'], $_POST['gender'], $_POST['email'], $_POST['company'], $_POST['trade'], $_POST['inducted'], $_POST['inductiondate'], $_POST['comment']));
    header('Location: index.php'); //issues a new page request upon submission to save resubmitting
    if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
    $errors[] = 'not a valid email'; 
    var_dump($_POST);
}
}
?>
-->



<!--<div class="form-style-5">

<h2>SITE PERSONNEL REGISTRATION</h2>
<form action="" method="post">  
    <label for"name">Name:</label><input type="text" name="name" value="">
    <br>
    <br>
    <label for"age">Age:</label><input type="number" name="age" value="yes">
    <br>
    <br>
    <label for"dob">Date of Birth:</label> 
    <input type="date" name="dob" value="date" required>
    <br>
    <br>
    <label for"gender">Gender:</label>
    <input type="radio" name="gender"  value="female">Female
    <input type="radio" name="gender"  value="male">Male
    <br>
    <br>
    E-mail: <input type="text" name="email" value="">
    <br>
    <br>
    Company: <select name="company">
    <option value="1">Jason Mechanical</option>
    <option>Browns Surfacing</option>
    <option>Williams Civil Contracting</option>
    <option>Dev Con Landscaping</option>
    <option>Block Rite Paving</option>
    <option>Jacobs Joinery</option>
    <option>FES Electrical</option>
    <option>National Plumbing</option>
    <option>Daniels Builders</option>
    </select>
    <br>
    <br>
    Trade: <select name="trade">
    <option value="1">Operator</option>
    <option>Groundworker</option>
    <option>Concreter</option>
    <option>Labourer</option>
    <option>Plant Operator</option>
    <option>Joiner</option>
    <option>Bricklayer</option>
    <option>Plumber</option>
    <option>Electrician</option>
    <option>Fitter</option>
    <option>Plasterer</option>
    </select>
    <br>
    <br>
    <label for"inducted">Inducted?</label>
    <input type="checkbox" name="inducted" checked="checked" value="yes">
    <br>
    <br>
    <label for"inductiondate">Induction Date:</label> 
    <input type="date" name="inductiondate" value="date" required>
    <br>
    <br>
    <label for"comment">Comment:</label>
    <textarea name="comment" rows="5" cols="40"></textarea>
    <br>
    <br>
    <input type="submit" value="submit">
</form>
</div>-->






</body>
</html>