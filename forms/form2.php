<!--array - normal array is given numbers starting at 0 by default
the associative array is made up of strings and associates anmes to variables-->

<form action="submit.php" method="post"> 
    <!--method = get or post, default is get-->
    Username: <input type="text" name="username" value="something">
    <br>
    <label for"Password">Password:</label>
    <!--labels attach a name to the attribute and can be styled by LABEL-->
    <input type="Password" name="Password" placeholder="similar to value but not prefilled, only a prompt">
    <!--input tag does not have closing tag. each input field needs to have a unique name, try to be consistent
    Value attribute prefills the box (optional) DONT USE PLACEHOLDERS-->
    <input type="button" value="something">
    <br>
    <input type="submit" value="submit this">
    <!--in the url & from the form will be represented by %26, also a space will be represented by a +-->
    <input type="reset" value="Reset">
    <br>
</form>