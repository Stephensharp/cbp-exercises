  Gender:
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="female") echo "checked";?> value="female">Female
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="male") echo "checked";?> value="male">Male
  <span class="error">* <?php echo $genderErr;?></span>
  <br><br>
  <input type="submit" name="submit" value="Submit">  
    <label for"title">Title:</label> <input type="text" name="title" value="text">
    <br>
    <label for"radio">Type</label>
    <input type="radio" name="contact" value="choose"> <label for"todo">Todo</label>
    <input type="radio" name="contact" value="choose">  <label for"choose">Note</label>
    <br>
    <label for"note">Note:</label><textarea name="note" rows="10" cols="50">Content</textarea>
    <br>
    <label for"date">Complete by:</label> <input type="date" name="date" value="date" required>
    <br>
    <label for"updates">Would you like to be sent a reminder</label>
    <input type="checkbox" name="updates" checked="checked" value="yes">
    <br>
    <label for"date">Reminder Date:</label> <input type="date" name="date" value="date" required>
    <br>
    <br>
  <!--E-mail: <input type="text" name="email" value="<?php echo $email;?>">
  <span class="error">* <?php echo $emailErr;?></span>
  <br><br>-->
  <!--Website: <input type="text" name="website" value="<?php echo $website;?>">
  <span class="error"><?php echo $websiteErr;?></span>
  <br><br>-->
  <?php





echo "<h2>Your Input:</h2>";
echo $name;
echo "<br>";
echo $email;
echo "<br>";
echo $website;
echo "<br>";
echo $comment;
echo "<br>";
echo $gender;





// define variables and set to empty values
// $nameErr = $emailErr = $genderErr = $websiteErr = "";
// $name = $email = $gender = $comment = $website = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $name = test_input($_POST["name"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
      $nameErr = "Not Valid"; 
    }
  }
  if (empty($_POST["comment"])) {
    $comment = "";
  } else {
    $comment = test_input($_POST["comment"]);
  }
  if (empty($_POST["age"])) {
    $ageErr = "Age is required";
  } else {
    $age = test_input($_POST["age"]);
  }
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>







<?php

// the variables are deliberately initialized with null so that you don't think about their current values
// their current value can be any number
$price = null; // integer
$in_stock = null; // integer
$on_sale = null; // boolean
$max_price = null; // integer
$amount_wanted = null; // integer

// 1.
    if($amount_wanted > 0)
    {
        return $amount_wanted;
    }
    else
    {
        return null;
    }

// 2.
    if($in_stock => $amount_wanted)
    {
        return 'warning';
    }
    else
    {
        return $amount_wanted;
    }
  // the amount in stock is greater or equal to the amount wanted by the customer
}

// 3.
if() {
  // the price is lower or equal to the maximum price the customer is willing to pay or the product is on sale
}

?>