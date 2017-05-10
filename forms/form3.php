<!--array - normal array is given numbers starting at 0 by default
the associative array is made up of strings and associates anmes to variables-->

<?php
if (isset($_GET['status']) && $_GET['status'] == 'ok') {
    echo '<p>OK COOL</p>';
}
?>

<form action="submit.php" method="post"> 
    <label for"name">Name:</label> <input type="text" name="name" value="name">
    <br>
    <label for"email">Email:</label> <input type="email" name="email" value="email">
    <br>
    <label for"budget">Budget:</label> <input type="number" name="budget" value="budget" required>
    <br>
    <label for"deadline">Project Deadline:</label> <input type="text" name="deadline" value="deadline">
    <br>
    <label for"updates">Would you like email updates of our services?</label>
    <input type="checkbox" name="updates" checked="checked" value="yes">
    <br>
    <label for"radio">How should we contact you?</label>
    <input type="radio" name="contact" value="email"> <label for"contact-email">Email</label>
    <input type="radio" name="contact" value="phone">  <label for"contact-phone">Phone</label>
    <br>
    <label for"note">Project Outline:</label><textarea name="note" rows="10" cols="50">outline</textarea>
    <br>
    <input type="submit" value="submit">
</form>


<!--https://nghttp2.org/httpbin/post-->