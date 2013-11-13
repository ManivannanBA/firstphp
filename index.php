<?php 
require "includes/init.php";


 ?>
<!DOCTYPE html>
	<html>
	<head>
			<meta charset="utf-8">
			<meta http-equiv="X-UA-Compatible" content="IE=edge">
             <meta name="viewport" content="width=device-width, initial-scale=1.0">
			<title>Dynamic</title>
			<link rel="stylesheet" type="text/css" href="includes/css/bootstrap.css">
            <link rel="stylesheet" type="text/css" href="includes/css/bootstrap.theme.css">
            <link rel="stylesheet" type="text/css" href="includes/css/style.css">
            <script type="text/javascript" src="includes/js/jquery.js"></script>
            <script type="text/javascript" src="includes/js/bootstrap.js"></script>

	</head>
	<body>
      <header>
 <nav class="navbar-wrapper navbar-default navbar-fixed-top" role="navigation">
   <div class="container">
     <div class="navbar-header">
        <div class="collapse navbar-collapse navbar-ex1-collapse">
        <div class="collapse navbar-collapse">
        <a class="navbar-brand" href="#">Dynamic page</a>
            <ul class="nav navbar-nav">
              <li class="active"><a href="#"><span class="glyphicon glyphicon-home"></span> Home</a></li>            
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-user"></span> About Us<b class="caret"></b></a>
                <ul class="dropdown-menu">
                  <li><a href="shop">Company </a></li>
                  <li><a href="shop.php">Contact Us</a></li>
                </ul>
              </li>
            </ul>
            <!-- <form class="navbar-form navbar-right" role="search">
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Search">
              </div>
              <button type="submit" class="btn btn-default">Submit</button>
            </form> -->
            <ul class="nav navbar-nav navbar-right">
              <li><a href="gallery"><span class="glyphicon glyphicon-asterisk"></span> Gallery</a></li>
              <li><a href="shop"><span class="glyphicon glyphicon-star"></span> Contact Us</a></li>
            </ul>
          </div>
          </div>
        </div>
  </header>
<section>
<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div style="height:100px;">
            </div>
        </div>
    </div>
    <div class="row">
        <div class ="col-xs-12">
        <div class="slideshow">
            <img src="includes/image/1.jpg">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
        </div>
    </div>
    </div>
          <div class="row">
            <div class="col-xs-4">
              <a href="#"><img class="img-responsive img-circle" src="images/feat1.jpg"></a>
              <h3 class="text-center">Type 1</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
              tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
              quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
              consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
              cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
              proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
              <a href="#" class="btn btn-success">Read More</a>
            </div>
 
            <div class="col-xs-4">
              <a href="#"><img class="img-responsive img-circle" src="images/feat2.jpg"></a>
              <h3 class="text-center">Type 2</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
              tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
              quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
              consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
              cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
              proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
              <a href="#" class="btn btn-danger">Read More</a>
            </div>
 
            <div class="col-xs-4">
              <a href="#"><img class="img-responsive img-circle" src="images/feat3.jpg"></a>
              <h3 class="text-center">Type 3</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
              tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
              quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
              consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
              cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
              proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
              <a href="#" class="btn btn-info">Read More</a>
            </div>
          </div>
        </div>
</section>
<footer>
        <div class="container">
        <div class="row">
          <div class="col-md-4">&copy; 2013 All Right Reserved</div>
          <div class="col-md-4">
       <!--      <ul class="nav nav-pills">
              <li class="active"><a href="about">About Us</a></li>
                         </ul> -->
          </div>
          <div class="col-md-4">
            <h3 class="text-right">Dynamic Webpage</h3>
          </div>
        </div>
        </div>
</footer>
      
</body>
</html>