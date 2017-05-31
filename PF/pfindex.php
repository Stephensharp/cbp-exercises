<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Portfolio</title>
  <link href='https://fonts.googleapis.com/css?family=Audiowide' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="css/navbar.css">
  <link rel="stylesheet" href="css/signature.css">
  <link rel="stylesheet" href="css/footer.css">
  <link rel="stylesheet" href="css/form.css">
  <script src="http://code.jquery.com/jquery-1.10.1.min.js"></script>
  <link rel="stylesheet" href="css/logos.css">
  <link rel="stylesheet" href="css/style2.css">
  <link rel="icon" href="img/logo.png" type="png" sizes="16x16">
  <script src="js/script.js"></script>
</head>


<body cz-shortcut-listen="true">

<?php require_once 'lib/data-functions.php'; ?>


  <nav class="navBar">
    <nav class="wrapper">
      <div class="logo">
        <a href="pfindex.php" title="Return to the homepage" class="logo">
      <img src="img/logo50.png" alt="ssdev logo" />
      </a>
      </div>
      <input type="checkbox" id="menu-toggle">
      <label for="menu-toggle" class="label-toggle"></label>
      </input>
      <ul>
        <li><a href="#about">About</a></li>
        <li><a href="#projects">Projects</a></li>
        <li><a href="#contact">Contact</a></li>
      </ul>
    </nav>
  </nav>


  <div class="bgimg-1">
    <div class="signature">
      <svg xmlns:dc="http://purl.org/dc/elements/1.1/" xmlns:cc="http://creativecommons.org/ns#" xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#"
        xmlns:svg="http://www.w3.org/2000/svg" xmlns="http://www.w3.org/2000/svg" id="svg10959" version="1.1" viewBox="0 0 300 500"
        height="30em" width="24.3em">
        <g id="step">
          <path class="stroke-step" d="m 75.576329,154.20779 -4.602927,-3.20177 c -9.394576,-4.81776 -34.593488,9.0412 -45.281801,14.74512 -9.338868,5.28012 -19.0186564,14.22846 -16.7428504,19.88214 6.8948794,13.01569 23.7492104,16.6816 33.4793504,25.99992 5.994734,9.79578 -14.78102,14.99375 -19.619527,15.2696 -4.852749,0.0337 -9.028016,-1.25489 -12.175317,-4.03602 -6.3513974,-6.94904 -2.5072714,-15.22338 0.448445,-19.84375 8.271123,-12.5836 17.200895,-18.71867 31.067359,-25.34895 10.666227,-5.05705 11.217241,5.4295 8.688525,10.62283 -7.295023,12.82328 -15.505999,20.86656 -14.889535,30.82534 4.558972,14.01458 22.280459,8.8317 28.140009,0.58298 4.464357,-7.03584 0.677656,-15.3537 -6.912877,-13.54408 -10.990707,3.33593 -6.883485,16.68848 -1.540338,22.24394 4.166997,5.51659 9.698254,6.81447 5.381357,13.04979 -3.282452,3.77888 -3.935026,-0.72346 -3.083126,-3.0247 v 0 c 3.173299,-11.20579 28.683312,-42.24622 26.165916,-44.60349 -4.424841,-1.67259 -12.203478,18.45107 -14.14031,26.46556">
        </g>
        <g id="hen">
          <path class="stroke-hen" d="m 108.25917,140.8187 c 0,0 -1.46658,0.70158 -1.99772,1.77576 -10.876697,24.13941 -19.580166,44.98426 -25.549629,73.55942 -1.993302,0.66041 4.806879,-11.87338 9.193152,-11.86141 5.03606,0.10939 2.55114,11.97001 2.61781,10.10345 -1.73362,-4.10556 12.314347,-2.4171 18.463447,-9.36458 2.88883,-3.33293 1.9647,-7.4329 -0.55792,-8.88933 -3.74429,-2.36514 -6.57566,-2.07821 -9.74601,0.50846 -4.486147,3.74317 -3.387417,8.47723 -1.027687,10.81391 3.887137,3.91116 6.780337,3.63076 9.377797,3.49315 7.94196,-1.36367 8.16944,-3.87054 13.68218,-10.92819 0.92168,-0.86024 2.05479,-3.34632 1.49862,-2.96455 -1.90286,1.3062 -2.34945,9.67823 -5.63876,13.22521 -1.90384,2.05297 6.68955,-11.87422 11.55826,-11.16236 3.64237,1.12379 1.30995,5.70923 2.5357,9.3566 1.09224,2.83983 4.78574,0.56364 10.28144,-3.1358 6.91581,-4.77547 5.20319,-5.0405 5.13701,-5.07359">
        </g>
        <g id="sh">
          <path class="stroke-sh" d="m 235.45219,153.88613 c 2.41485,0.76258 -0.3857,-3.36478 -2.87003,-3.85664 -52.84774,-6.67553 -95.58861,20.77473 -95.96753,25.29237 -0.94197,8.23689 64.01841,15.88184 55.3518,29.03119 -1.68133,2.40919 -12.16297,9.87478 -31.13569,-6.07073 -6.85254,-6.34538 -1.37051,-14.49125 4.49643,-20.10688 12.36127,-10.53588 38.75176,-14.42129 42.8595,-11.10499 7.76476,5.30587 -18.21478,36.38362 -19.01413,35.51695 -0.82364,-0.96556 24.89217,-21.00342 26.45834,-19.82133 3.28888,2.65238 -13.64625,14.15497 -7.3979,18.05646 3.90461,2.88068 11.24106,-0.47835 16.86157,-0.71752">
        </g>
        <g id="arp">
          <path class="stroke-arp" d="m 232.76154,191.19686 c -0.72953,-1.45758 0.1578,-3.04589 -2.33193,-4.30508 -1.69039,-0.99034 -10.40437,3.2635 -13.54307,6.45763 -10.57568,10.97261 15.55533,8.22899 17.04661,-4.27613 -0.47837,-0.2123 -3.41993,6.84808 -3.369,9.85928 0.0329,4.17988 5.88266,-2.19796 9.17072,-10.71787 1.49516,-2.39578 -1.98972,6.23588 -3.61,10.20216 -1.63782,4.47266 1.76389,-8.51151 16.18892,-13.22917 5.16076,-1.16934 6.28841,-1.24327 5.02262,0.26907 -12.08347,17.08836 -10.2901,32.04677 -12.55652,31.39124 -3.06176,-0.602 3.38362,-11.55722 12.05336,-23.31246 10.87953,-14.7515 25.26186,-30.76283 28.75526,-29.15576 5.61808,1.94203 -9.87237,27.85524 -39.55296,35.51695">
        </g>
        <g id="underline">
          <path class="stroke-underline" d="M 1.8975787,252.51767 C 16.96712,246.06608 43.931009,236.70478 104.10576,224.29682 c 69.16804,-12.70459 191.87103,-22.82448 188.89155,-11.28365 -0.75256,2.44043 -4.37632,5.53688 -7.09504,5.93743 -2.76313,0.59494 -4.698,0.43127 -5.11773,-1.12017">
        </g>
        <g id="t">
          <path class="stroke-t" d="m 35.140871,195.77206 c 7.320141,-4.49219 26.976728,-8.73044 25.574282,-4.35747 -0.877895,2.04286 -2.689198,1.37865 -2.893124,1.41188">
        </g>
        <g id="bbo">
          <path class="stroke-bbo" d="m -14.967417,80.93078 c -18.531341,0.002 -35.393014,16.86319 -35.394531,35.39453 v 155.01758 c 0.0015,18.53133 16.863195,35.39301 35.394531,35.39453 H 312.70446 c 18.53134,-0.002 35.39301,-16.8632 35.39453,-35.39453 V 116.32531 C 348.09699,97.79397 331.2358,80.93229 312.70446,80.93078 Z">
        </g>
        <g id="bbi">
          <path class="stroke-bbi" d="m -14.967417,92.27062 a 24.05666,24.05666 0 0 0 -24.054688,24.05469 v 155.01758 a 24.05666,24.05666 0 0 0 24.054688,24.05468 H 312.70446 a 24.05666,24.05666 0 0 0 24.05469,-24.05468 V 116.32531 A 24.05666,24.05666 0 0 0 312.70446,92.27062 Z">
        </g>
      </svg>
      
    </div>
  </div>

  <div class="cont1">
     <h3 id="about">About</h3>
    <div class="container">
      <div class="item item1">
        <p>
Creating things is what I love. Taking someones idea and turning it into a reality is what I have done for the past 18 years. I started out my career as a Graduate Civil Engineer working in Design Consultancies, learning 3D design of buildings, structures and infrastructure. I'd take clients concepts through the entire process of feasibility, concept design, detailed design, tendering, contract award, project management and supervision to ensure the client received the product they required, on time and on budget. From this I followed on to project management on the delivery delivery side of projects, responsible for large teams of people and budgets up to £20m. Having worked on multi billion dollar projects and in far flung reaches of the world I have gained skills which are easily interchangeable. Having a sound knowledge of web development from training with professionals in Prague I am skilled in HTML5, CSS, Javascript, JQuery, responsivity, PHP, Bootstrap, git, SVN, Ajax, mySQL, OOP and CSS frameworks. I love meeting new people so feel free to contact me for a friendly chat. 
 
  </p>
      </div>
      <div class="item item2">
        <img src="img/pde.jpg" alt="stephen sharp photo" width="" position="" />
      </div>
    </div>
  </div>
  <div class="cont5">
    <div class="container">
            <div class="item item1">
                <script>
                    $(window).scroll(function () {
                        $('.logo1 img').each(function () {
                            console.log($(this))
                            var imagePos = $(this).offset().top;
                            var topOfWindow = $(window).scrollTop();
                            if (imagePos < topOfWindow + 650) {
                                $(this).addClass("hatch");
                            }
                        });
                    });
                // var content = document.getElementById('logo');
                </script>
                <a href="pfindex.html" title="Return to the homepage" class="logo1">
                    <img id="logo1" src="img/logos/jquery.png" alt="jquery logo"/>
                    </a>
            </div>
            <div class="item item2">
                <script>
                    $(window).scroll(function () {
                        $('.logo2 img').each(function () {
                            console.log($(this))
                            var imagePos = $(this).offset().top;
                            var topOfWindow = $(window).scrollTop();
                            if (imagePos < topOfWindow + 650) {
                                $(this).addClass("bigEntrance");
                            }
                        });
                    });
                // var content = document.getElementById('logo');
                </script>
                <a href="pfindex.html" title="Return to the homepage" class="logo2">
                    <img id="logo2" src="img/logos/git.png" alt="git logo"/>
                    </a>
            </div>
            <div class="item item3">
                <script>
                    $(window).scroll(function () {
                        $('.logo3 img').each(function () {
                            console.log($(this))
                            var imagePos = $(this).offset().top;
                            var topOfWindow = $(window).scrollTop();
                            if (imagePos < topOfWindow + 650) {
                                $(this).addClass("bigEntrance");
                            }
                        });
                    });
                // var content = document.getElementById('logo');
                </script>
                <a href="pfindex.html" title="Return to the homepage" class="logo3">
                    <img id="logo3" src="img/logos/mysql.png" alt="mysql logo"/>
                    </a>
            </div>
            <div class="item item4">
                <script>
                    $(window).scroll(function () {
                        $('.logo4 img').each(function () {
                            console.log($(this))
                            var imagePos = $(this).offset().top;
                            var topOfWindow = $(window).scrollTop();
                            if (imagePos < topOfWindow + 650) {
                                $(this).addClass("slideRight");
                            }
                        });
                    });
                // var content = document.getElementById('logo');
                </script>
                <a href="pfindex.html" title="Return to the homepage" class="logo4">
                    <img id="logo4" src="img/logos/svn.png" alt="svn logo"/>
                    </a>
            </div>
            <div class="item item5">
                <script>
                    $(window).scroll(function () {
                        $('.logo5 img').each(function () {
                            console.log($(this))
                            var imagePos = $(this).offset().top;
                            var topOfWindow = $(window).scrollTop();
                            if (imagePos < topOfWindow + 650) {
                                $(this).addClass("expandOpen");
                            }
                        });
                    });
                // var content = document.getElementById('logo');
                </script>
                <a href="pfindex.html" title="Return to the homepage" class="logo5">
                    <img id="logo5" src="img/logos/apache.png" alt="apache logo"/>
                    </a>
            </div>
            <div class="item item6">
                <script>
                    $(window).scroll(function () {
                        $('.logo6 img').each(function () {
                            console.log($(this))
                            var imagePos = $(this).offset().top;
                            var topOfWindow = $(window).scrollTop();
                            if (imagePos < topOfWindow + 650) {
                                $(this).addClass("slideExpandUp");
                            }
                        });
                    });
                // var content = document.getElementById('logo');
                </script>
                <a href="pfindex.html" title="Return to the homepage" class="logo6">
                    <img id="logo6" src="img/logos/js.png" alt="js logo"/>
                    </a>
            </div>
            <div class="item item7">
                <script>
                    $(window).scroll(function () {
                        $('.logo7 img').each(function () {
                            console.log($(this))
                            var imagePos = $(this).offset().top;
                            var topOfWindow = $(window).scrollTop();
                            if (imagePos < topOfWindow + 650) {
                                $(this).addClass("slideDown");
                            }
                        });
                    });
                // var content = document.getElementById('logo');
                </script>
                <a href="pfindex.html" title="Return to the homepage" class="logo7">
                    <img id="logo7" src="img/logos/bs.png" alt="bs logo"/>
                    </a>
            </div>
            <div class="item item8">
                <script>
                    $(window).scroll(function () {
                        $('.logo8 img').each(function () {
                            console.log($(this))
                            var imagePos = $(this).offset().top;
                            var topOfWindow = $(window).scrollTop();
                            if (imagePos < topOfWindow + 650) {
                                $(this).addClass("bigEntrance");
                            }
                        });
                    });
                // var content = document.getElementById('logo');
                </script>
                <a href="pfindex.html" title="Return to the homepage" class="logo8">
                    <img id="logo8" src="img/logos/css3.png" alt="css3 logo"/>
                    </a>
            </div>
            <div class="item item9">
                <script>
                    $(window).scroll(function () {
                        $('.logo9 img').each(function () {
                            console.log($(this))
                            var imagePos = $(this).offset().top;
                            var topOfWindow = $(window).scrollTop();
                            if (imagePos < topOfWindow + 650) {
                                $(this).addClass("bounce");
                            }
                        });
                    });
                // var content = document.getElementById('logo');
                </script>
                <a href="pfindex.html" title="Return to the homepage" class="logo9">
                    <img id="logo9" src="img/logos/php.png" alt="php logo"/>
                    </a>
            </div>
            <div class="item item10">
                <script>
                    $(window).scroll(function () {
                        $('.logo10 img').each(function () {
                            console.log($(this))
                            var imagePos = $(this).offset().top;
                            var topOfWindow = $(window).scrollTop();
                            if (imagePos < topOfWindow + 650) {
                                $(this).addClass("pullUp");
                            }
                        });
                    });
                // var content = document.getElementById('logo');
                </script>
                <a href="pfindex.html" title="Return to the homepage" class="logo10">
                    <img id="logo10" src="img/logos/ajax.png" alt="ajax logo"/>
                    </a>
            </div>
            <div class="item item11">
                <script>
                    $(window).scroll(function () {
                        $('.logo11 img').each(function () {
                            console.log($(this))
                            var imagePos = $(this).offset().top;
                            var topOfWindow = $(window).scrollTop();
                            if (imagePos < topOfWindow + 650) {
                                $(this).addClass("pullDown");
                            }
                        });
                    });
                // var content = document.getElementById('logo');
                </script>
                <a href="pfindex.html" title="Return to the homepage" class="logo11">
                    <img id="logo11" src="img/logos/html5.png" alt="html5 logo"/>
                    </a>
            </div>
    </div>
  </div>

  
  

  <div class="bgimg-2">
    <div class="caption">
      <span class="border" style="background-color:transparent;font-size:25px;color: #f7f7f7;">WELCOME</span>
    </div>
  </div>

  <div class="cont2">
    <h3 id="projects">Projects</h3>
    <p>To be completed as projects progress.</p>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
  </div>

  <div class="bgimg-3">
    <div class="caption">
      <span class="border" style="background-color:transparent;font-size:25px;color: #f7f7f7;">CREATE</span>
    </div>
  </div>

  <div class="cont3">
    <h3 id="contact">Contact</h3>
    <div class="container">
      <div class="item item1">
<?php
if (isset($_GET['status']) && $_GET['status'] == '') 
    {
    echo '<p></p>';
    }
?>
          <form action="submit.php" method="post">
            <label for "name">Name:</label> <input type="text" name="name" value="">
            <br>
            <label for "phone_number">Contact Number:</label> <input type="number" name="phone_number" value="">
            <br>
            <label for "email">Email:</label> <input type="email" name="email" value="">
            <br>
            <label for "contact">How should I contact you?</label>
            <input type="radio" name="contact" value="email"> <label for "contact_email">Email</label>
            <input type="radio" name="contact" value="phone"> <label for "contact_phone">Phone</label>
            <br>

      </div>
      <div class="item item2">
        <label for "note">Comments:</label><textarea type="textarea" name="note" rows="10" cols="50"></textarea>
        <br>
        <input type="submit" value="submit">
        </form>
      </div>
    </div>
  </div>


  </div>

  <div class="bgimg-4">
    <div class="caption">
      <span class="border">THANK YOU FOR VISITING</span>
    </div>
  </div>
  <div class="cont4">
    <div class="wrapper">
      <div class="social">&#62220;</div>
      <div class="social">&#62217;</div>
      <div class="social">&#62223;</div>
      <div class="social">&#62232;</div>
      <div class="social">&#62235;</div>
      <div class="social">&#62226;</div>
      <div class="social">&#62214;</div>
    </div>
  </div>

</body>

</html>

<!--$('a[href*=#]:not([href=#])').click(function() {
    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') 
        || location.hostname == this.hostname) {

        var target = $(this.hash);
        target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
           if (target.length) {
             $('html,body').animate({
                 scrollTop: target.offset().top
            }, 1000);
            return false;
        }
    }
});-->