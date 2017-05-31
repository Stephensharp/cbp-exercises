
<!--//slavokozar github lectures javascript#2 eshop example  presentation and files etc-->




<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Mobirise Free Bootstrap Template, https://mobirise.com -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="generator" content="SlavoKozar.sk">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="CodeLeague">
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/font-awesome.css" rel="stylesheet">
    
    <title>Coding Bootcamp</title>
</head>
<style>
    .item-row{
        padding-top:10px;
        border-top:2px solid black;
    }
</style>
<body>
 
<div class="container">
    <div class="row">
        <div class="col-md-10">
            <h1>Coolest Eshop Ever!</h1>
        </div>
        <div class="col-md-2 text-right">
            <i id="basket" class="fa fa-shopping-basket fa-4x"></i>
            <span id="basket-count"></span>
        </div>
    </div>
 
    <div class="row item-row">
        <div class="col-md-6">
            <div class="item-text">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
            </div>
        </div>
        <div class="col-md-6">
            <a href="to-basket" class="item-to-basket btn btn-lg btn-danger">Into the basket!</a>
        </div>
    </div>
 
    <div class="row item-row">
        <div class="col-md-6">
            <div class="item-text">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
            </div>
        </div>
        <div class="col-md-6">
            <a href="to-basket" class="item-to-basket btn btn-lg btn-danger">Into the basket!</a>
        </div>
    </div>
 
    <div class="row item-row">
        <div class="col-md-6">
            <div class="item-text">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
            </div>
        </div>
        <div class="col-md-6">
            <a href="to-basket" class="item-to-basket btn btn-lg btn-danger">Into the basket!</a>
        </div>
    </div>
 
    <div class="row item-row">
        <div class="col-md-6">
            <div class="item-text">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
            </div>
        </div>
        <div class="col-md-6">
            <a href="to-basket" class="item-to-basket btn btn-lg btn-danger">Into the basket!</a>
        </div>
    </div>
 
    <div class="row item-row">
        <div class="col-md-6">
            <div class="item-text">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
            </div>
        </div>
        <div class="col-md-6">
            <a href="to-basket" class="item-to-basket btn btn-lg btn-danger">Into the basket!</a>
        </div>
    </div>
 
    <div class="row item-row">
        <div class="col-md-6">
            <div class="item-text">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
            </div>
        </div>
        <div class="col-md-6">
            <a href="to-basket" class="item-to-basket btn btn-lg btn-danger">Into the basket!</a>
        </div>
    </div>
   
</div>
<script src="jquery-3.2.1.js"></script>
<script>

$('.item-to-basket').click(function(e){
    e.preventDefault();

    var btn = $(e.target); //btn is the div id btn.

    var pos = btn.offset();

    var left = pos.left;
    var right = left + btn.outerWidth();

    var top = pos.top;
    var bottom = top + btn.outerHeight();

    var centerTop = (top + bottom) / 2;
    var centerLeft = (left + right) / 2;

    $('body').append('<div id="plane" style="background:red; width:50px; height:50px"></div>')

    $('#plane').css({
        'position':'absolute',
        'left': (centerLeft -25)+ 'px',
        'top': (centerTop -25) + 'px'

    });


    var basket = $('#basket'); //basket is the div id
    var pos = basket.offset();

    var left = pos.left;
    var right = left + basket.outerWidth();

    var top = pos.top;
    var bottom = top + basket.outerHeight();

    var centerTop = (top + bottom) / 2;
    var centerLeft = (left + right) / 2;

    $('#plane').animate({
        'left': (centerLeft -25)+ 'px',
        'top': (centerTop -25) + 'px'
    }, 5000,                         // the speed of the animation
        function(){
            $('#plane').remove(); //removes the plane
           
            var count = $('#basket-count').text(); //counts the number of times
            if(count == '') {
                count = 0;
            }
            count = parseInt(count) + 1;    //changes the value of a string to number and integer
            $('#basket-count').text(count);
    });

    console.log(left, right, top, bottom);

});



</script>

</body>
</html>