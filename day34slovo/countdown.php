<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
<div id="countdown"></div>

<button id="start">start</button>

<script src="jquery-3.2.1.js"></script>

<script>

var date_now = new Date();
var date_countdown = new Date(2017,5,3);

var diff = date_countdown.getTime() - date_now.getTime();

var secs = diff / 1000;
var mins = secs / 60;
var hrs = mins / 60;
var days = hrs / 24;


console.log(date_now);
console.log(date_countdown);

console.log(days, hrs, mins, secs);
    
</script>

</body>
</html>