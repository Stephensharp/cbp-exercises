<!--array - normal array is given numbers starting at 0 by default
the associative array is made up of strings and associates anmes to variables-->

<form action="submit.php" method="get"> 
    <!--method = get or post, default is get-->
    Firstname: <input type="text" name="firstname" value="something">
    <br>
    <label for"Lastname">Lastname:</label>
    <!--labels attach a name to the attribute and can be styled by LABEL-->
    <input type="text" name="Lastname" placeholder="similar to value but not prefilled, only a prompt">
    <!--input tag does not have closing tag. each input field needs to have a unique name, try to be consistent
    Value attribute prefills the box (optional) DONT USE PLACEHOLDERS-->
    <br>
    <label for"hungry">Hungry?</label>
    <!--pairs it with hungry below, SHOULD BE USED FOR EVERY INPUT-->
    <input type="checkbox" name="hungry" checked="checked" value="yes">
    <!--adding checked to the end means prechecked/ticked. Value attribute, default is on however can change by inserting this value-->
    <br>
    <input type="radio" name="food" value="pizza"> <label for"food-pizza">Pizza</label>
    <br>
    <input type="radio" name="food" value="beer">  <label for"food-beer">Beer</label>
    <br>
    <input type="radio" name="food" value="burger">  <label for"food-burger">Burger</label>
    <!--the name always refers to the group of the radio buttons, can only choose one from the group. need to stipulate a value or it wont submit a value-->
    <br>
    Food: <select name="food">
    <option value="1">burger</option>
    <option>pizza</option>
    <option>beer</option>
    <option>pasta</option>
    <option>steak</option>
    </select>
    <br>
    <input type="hidden" name="token" value="beeeeeeerrrrr">
    <!--this will get submitted on the put but not visible on the page.....CAUTION SECURITY THEY CAN BE CHANGED BY USER-->
    <br>
    Note: <textarea name="note" rows="5" cols="23">abcde</textarea>
    <!--cols and rows dictates the size of the box-->
    <br>
<button><em><strong>this is an html button</strong></em></button>

<br>
<button><em><strong></strong><img src="https://encrypted-tbn2.gstatic.com/images?q=tbn:ANd9GcS1FytPLwvkshLoKarHOD0RlLGQ6SPQwC2OmUuPt49CDLA0FqrWXA"></em></button>

<br>
    <input type="button" value="something">
    
    <br>
    <input type="submit" value="submit this">
    <!--in the url & from the form will be represented by %26, also a space will be represented by a +-->
    <input type="reset" value="Reset">
    <br>
    





    <!--tabindex allows the order of the tabbing along the page to be reordered.-->
</form>