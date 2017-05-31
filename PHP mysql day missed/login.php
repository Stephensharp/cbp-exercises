<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href ="repaso.css" rel="stylesheet" type= "text/css">
    <title>NOTES Mikel Adminer</title>
</head>
<body>

<?php


$pdo = new PDO('mysql:host=localhost;dbname=notes;charset=utf8', 'root', '');

$pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION); 

?>

<?php

                 //var_dump($_POST);
if($_POST) {
                                    //SELECT FROM SIGNUG(TABLE) TROUGH USERNAME AND WITH = ? I AM REPRESENTING THE EXISTING VALUE OF THAT ROW/DATA//
            $stmt = $pdo->prepare('SELECT * FROM signup where username = ?');    

                //EXECUTE THE STUFF THAT YOU SELECTED ON LINE 25 THROUGH YOUR STATEMENT//

            $stmt->execute(array($_POST['username']));

            // CREATE A VARIABLE IN WHICH I EQUAL TO A STATEMENT ->GO AND FETCH FOR ME//
            $row= $stmt->fetch();
            var_dump($row); //checkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkKKK!!!
            //IS PASSWORD VERYFY!! I WANT YOU TO GRAB IT . HOW ? THROUGH OUR VARIABLE CREATE RIGHT BEFORE TO STORAGE!!!!INFORMATION//
            if (password_verify($_POST['password'], $row['password'])){                                     //WHENEVER WE ARE VERYFING PASSWORD_VERIFY IT WORKS ONLY FOR PASSWORD_HASH
                
                session_regenerate_id();  //ALWAYS DO THIS AFTER VERIFYING THE PASSWORD//
                
                $_SESSION['user'] = $row['username'];   //AFTER VERYFING THAT PASSWORD IS CORRECT WE WILL TAKE  THE USERNAME AND SAVE IN SOME SAFE BOX. REGARDING LINE 14
            header('Location: repaso.php');
            exit;
             }
            }
          
?>

    <h1>LOGIN</h1>

    <form action= '' method= 'post'>            <!--WHEN I AM NOT CHANGING ANY STATUS IN THE SERVER AND I WANT TO SEND THE LINK TO SOMBEODY. LOGIN IN IS CHANGING THE STATE OF SERVER/USER FROM NOT LOGGED IN TO LOOGED IN-->
     <div class = 'cont3'>
    
    <label>Username:
    <input type = 'text' name = "username"></label><br>

    <label>Password:
    <input type = 'text' name = "password"></label><br>
    <br>


    <input type = "submit"  value = "Log in">

    </form>

<a href="logout.php">Log out</a>
 
</body>
</html>