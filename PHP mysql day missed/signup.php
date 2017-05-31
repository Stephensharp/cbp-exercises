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
        

        //IF MAIL IS WRONG , IT WILL TAKE DATA TO THIS ARRAY$ERRORS[] AND IT WILL NOT LOAD MY NEW DATABASE CREATED  BECAUSE DATA IS BEING TAKEN INTO THE ARRAY//

        //if (!filter_var($_POST ['mail'], FILTER_VALIDATE_EMAIL)) {
            //$errors[] = 'not a valid email';            
        
       //when we ARE INSERTING DATA INTO THE NOTE TABLE WE WILL PREPARE ANOTHER COMMAND TO//
            //I will send this header to browser and he will issue a request to php server //instead of re-sending the form 
            //again (after user refresh page) //var_dump($_POST);    //updating on my table   //Above          

            $stmt = $pdo->prepare('INSERT INTO signup (username, password) VALUES(?, ?)');    

            $stmt->execute(array($_POST['username'], PASSWORD_HASH($_POST['password'], PASSWORD_DEFAULT)));       //need to cal in here where user is registering themselves so their passwords get automatically register with Password_hash!

            //$signupId = $pdo->lastInsertId(); //WE CREATE THIS VARIABLE SO IT CAN STORAGE + 1 VALUE//        dont use variable here                    //JUST PREPARE THE query          1
          
            header('location: login.php'); //IS IT HERE?? RIGHT????                                                                                                 2
           exit();
 }
?>

    <form action= '' method= 'post'>
     <div class = 'cont3'>
    
    <label>Username:
    <input type = 'text' name = "username"></label><br>

    <label>Password:
    <input type = 'password' name = "password"></label><br>
    <br>


    <input type = "submit"  value = "Sign up">

    </form>
</body>
</html>