<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <link rel="icon" href="favicon.ico">


    <!-- Bootstrap core CSS -->
    <link href="./css/bootstrap.min.css" rel="stylesheet">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <link href="./css/custom.css" rel="stylesheet"> 
    <link href="./css/custom.css" rel="stylesheet">
    <title>Home : Rang Dey Zindagi</title>
</head>

<body>
    <div id="fb-root"></div>
    <script>(function(d, s, id) {
      var js, fjs = d.getElementsByTagName(s)[0];
      if (d.getElementById(id)) return;
      js = d.createElement(s); js.id = id;
      js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.6&appId=975550465816975";
      fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));
    </script>
    <!-- Static navbar -->
    <nav class="navbar navbar-inverse navbar-default navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <img class="visible-xs" src="images/logo.png" style="float:left;height: 38px; margin: 0px 10px;" />
                <a class="navbar-brand" href="#"></a>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="index.php">Home</a></li>
                    <li><a href="#contact">Contact</a></li>
                    <li><a href="#gallery">Gallery</a></li>
                    <!--li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Dropdown <span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="#">Action</a></li>
                            <li><a href="#">Another action</a></li>
                            <li><a href="#">Something else here</a></li>
                            <li class="divider"></li>
                            <li class="dropdown-header">Nav header</li>
                            <li><a href="#">Separated link</a></li>
                            <li><a href="#">One more separated link</a></li>
                        </ul>
                    </li-->
                </ul>
            </div>
            <!--/.nav-collapse -->
        </div>
    </nav>
    <!---->

    <div style="background-color: white; border-bottom: 4px solid #29166F; margin-bottom: 0px; padding-top: 45px; padding-bottom:7px;">
    <div class="container" >
        <a href="./">
        <img src="images/logo-long.jpg" style="display: inline-block; vertical-align: middle; max-height: 90px; max-width: 90%; margin-right: 40px;" />
        </a>
        <!--h1>Rang Dey Zindagi</h1-->

        <ul class="nav nav-pills" style="font-weight: bold; font-size: 1em; display: inline-block; vertical-align: bottom;">
            <li role="presentation" class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-expanded="false">About Us<span class="caret"></span>
                </a>
                <ul class="dropdown-menu" role="menu">
                    <li role="presentation"><a href="about.php">About Rang Dey Zindagi</a></li>
                    <li role="presentation"><a href="FAQ.php">FAQ</a></li>
                    <li role="presentation"><a href="FAQ.php">Contact Us</a></li>
                </ul>
            </li>

            <li role="presentation" class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-expanded="false">Our Centers<span class="caret"></span>
                </a>
                <ul class="dropdown-menu" role="menu">
                    <li role="presentation"><a href="map.php">Locate on Map</a></li>
                    <li class="divider"></li>
                    <li role="presentation"><a href="#">Center #1</a></li>
                    <li role="presentation"><a href="#">Center #2</a></li>
                    <li role="presentation"><a href="#">Center #3</a></li>
                    <li role="presentation"><a href="#">Center #4</a></li>
                </ul>
            </li>

            <li role="presentation" class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-expanded="false">Membership<span class="caret"></span>
                </a>
                <ul class="dropdown-menu" role="menu">
                    <li role="presentation"><a href="#">Why become a member?</a></li>
                    <li role="presentation"><a href="#">Apply Now</a></li>
                    <li class="divider"></li>
                    <li role="presentation"><a href="#">Alumni</a></li>
                </ul>
            </li>

            <li role="presentation">
                <a href="#" role="button" aria-expanded="false">Gallery</span>
                </a>
            </li>

            <li role="presentation">
                <a href="#" role="button" aria-expanded="false">Blogs</span>
                </a>
            </li>
        </ul>
    </div>
    <!--hr style="border: 2px solid #29166F; margin-bottom: 0px;" /-->
    </div>  <!-- Carousel ================================================== -->
    <style>
    .carousel-caption {
        text-shadow:1px 1px 15px #000000;
    }
    </style>
<!-- carousel -->
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
            <li data-target="#myCarousel" data-slide-to="3"></li>
        </ol>
        <div class="carousel-inner" role="listbox">
            <div class="item active" style="background-image: url('images/carousel0.jpg');">
                <!--img src="images/carousel0.jpg"  alt="First slide"-->
                <div class="container">
                    <div class="carousel-caption">
                            <p>Education is the best friend. An educated person is respected everywhere. Education beats the beauty and the youth.</p>
                            <p class="text-right">—<small>Chanakya</small></p>
                    </div>
                </div>
            </div>
            <div class="item" style="background-image: url('images/carousel1.jpg');">
                <div class="container">
                    <div class="carousel-caption">
                        <p>
                        The syllable gu means shadows<br/>
                        The syllable ru, he who disperses them,<br/>
                        Because of the power to disperse darkness<br/>
                        the guru is thus named.</p>
                        <p class="text-right">—<small> Advayataraka Upanishad 14—18, verse 5</small></p>
                    </div>
                </div>
            </div>
            <div class="item" style="background-image: url('images/carousel2.jpg');">
                <div class="container">
                    <div class="carousel-caption">
                        <p>Acquire the transcendental knowledge from a Self-realized master by humble reverence, by sincere inquiry, and by service. The wise ones who have realized the Truth will impart the Knowledge to you</p>
                        <p class="text-right"><small></small></p>
                    </div>
                </div>
            </div>
            <div class="item" style="background-image: url('images/carousel3.jpg');background-position:bottom;">
                <div class="container">
                    <div class="carousel-caption">
                        <p>A student of life considers the world a classroom.</p>
                        <p class="text-right"><small></small></p>
                    </div>
                </div>
            </div>
        </div>
        <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
<!-- /.carousel -->

        <footer class="footer" style="background-color: #29166F;">
        <div class="container" style="color: #c4c4c4; padding-top: 10px;">
            <div class="col-sm-4">
                <div class="fb-like" data-href="https://www.facebook.com/rangdeyzindagi" data-width="220" data-layout="standard" data-action="like" data-show-faces="true" data-share="true"></div>
            </div>
            
            <div class="col-md-4">
            </div>
            
            <div class="col-md-4" >
                <address style="margin-left:29%; margin-top:10px;">
                    <b>Rang Dey Zindagi</b><br />
                    Indore<br />
                    <abbr title="Mobile">Mob:</abbr>
                    (+91) 000 00 0000
                </address>
            </div>
            
        </div>
        <div class="well well-sm">
            <div class="container">
                <p class="text-muted small">Copyright <span class="glyphicon glyphicon-copyright-mark" aria-hidden="true"></span>2016 - Rang Dey Zindagi</p>
            </div>
        </div>
    </footer>
    
<!--- eofJavascripts  ---->
<!-- Bootstrap core JavaScript ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="./js/bootstrap.min.js"></script>
    <script src="./js/jquery.cycle2.min.js"></script>
    <script src="./js/jquery.cycle2.carousel.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>  
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>    
</body>
</html>
