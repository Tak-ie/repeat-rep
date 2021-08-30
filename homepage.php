  <?php require('Db.php');?>
    <?php require ('User.php');?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project1 </title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/fonts/ionicons.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Aguafina+Script">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lora">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Oxygen+Mono">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.1.1/aos.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.8.2/css/lightbox.min.css">
    <link rel="stylesheet" href="assets/css/styles.min.css">
</head>

<body>
    <nav class="navbar navbar-light navbar-expand-md" style="background-color:#EDB518;margin-bottom:0px;">
        <div<?php echo User::getName('homepage');?> class="container-fluid"><a class="navbar-brand" href="homePage.php" style="font-weight:bold;font-style:italic;">K&amp;C &nbsp;Restaurant</a><button class="navbar-toggler" data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div
                class="collapse navbar-collapse" id="navcol-1">
                   <ul class="nav navbar-nav ml-auto">
                    <li <?php echo User::getName('homepage');?> class="nav-item" role="presentation"><a class="nav-link active" href="homepage.php" style="font-size:21px;">Home</a></li>
                    <li <?php echo User::getName('Category');?>class="nav-item" role="presentation"><a class="nav-link active" href="Category.php" style="font-size:21px;">Category</a></li>
                    <li  class="dropdown"><a class="dropdown-toggle nav-link dropdown-toggle" data-toggle="dropdown" aria-expanded="false" href="#" style="color:#000000;font-size:21px;">Specials</a>
                        <div <?php echo User::getName('Specials');?> class="dropdown-menu" role="menu"><a class="dropdown-item" role="presentation" href="Specials.php">Beef Steak&nbsp;</a><a class="dropdown-item" role="presentation" href="specials-2.php">Beef Stew</a><a class="dropdown-item" role="presentation" href="specials-3.php">Veggies</a></div>
                    </li>
                    <li <?php echo User::getName('SignUp');?> class="nav-item" role="presentation"><a class="nav-link active" href="Sign Up.php" style="font-size:21px;">Sign up</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link active" href="Contact Us.php" style="font-size:21px;">Contact us</a></li>
                </ul>
        </div>
        </div>
		 
    </nav>
	
	<div class="jumbotron" style="height:369px;background-color:#61122f;background-image:url(&quot;assets/img/jumbotron_1200.jpg&quot;);margin-bottom:0px;margin-left:12px;margin-right:12px;margin-top:12px;"></div>
    <div class="article-list" style="background-color:#61122f;">
        <div class="container">
            <div class="intro"></div>
            <div class="row articles">
                <div class="col-sm-6 col-md-4 item" style="height:378px;"><a href="<?php echo User::getImage('menu');?>"><img class="img-thumbnail img-fluid" src="assets/img/menu-tile1.jpg" data-bs-hover-animate="jello" style="height:210px;"><span class="d-flex justify-content-center">Menu</span></a></div>
                <div class="col-sm-6 col-md-4 item"
                    style="height:378px;"><a href="<?php echo User::getImage('Specials');?>"><img class="img-thumbnail img-fluid" src="assets/img/specials-tile1.jpg" data-bs-hover-animate="jello" style="height:208px;"><span class="d-flex justify-content-center">Specials</span></a></div>
                <div class="col-sm-6 col-md-4 item col-sm-12"
                    style="height:378px;"><a href="<?php echo User::getImage('Destination');?>"><img class="img-thumbnail img-fluid" src="assets/img/map.jpg" data-bs-hover-animate="jello" style="height:210px;"><span class="d-flex justify-content-center" style="color:rgb(0,123,255);">Destination</span></a></div>
            </div>
        </div>
    </div>
	 <div class="footer-dark">
        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-md-3 item">
                        <h3>Address</h3>
                        <ul>
                            <li><a href="<?php echo User::getDestination('Address');?>">68 Market street</a></li>
                            <li><a href="<?php echo User::getDestination('City');?>">Polokwane</a></li>
                            <li><a href="<?php echo User::getDestination('Telno');?>">Tel no 015 294 8451</a></li>
                        </ul>
                    </div>
                    <div class="col-sm-6 col-md-3 item">
                        <h3>Working hours</h3>
                        <ul>
                            <li><a href="<?php echo User::getHours('Weekdays');?>">Mon-Fri &nbsp;09h00 - 20h30</a></li>
                            <li><a href="<?php echo User::getHours('Weekend');?>">Sat &nbsp;09h00-21h00</a></li>
                            <li><a href="<?php echo User::getHours('Weekend');?>">Sunday &nbsp;Closed</a></li>
                        </ul>
                    </div>
                    <div class="col-md-6 item text">
                        <h3>About us</h3>
                        <p>Our mission is to ensure that we provide the greatest taste in the world.The food is made to perfection,our chef use &nbsp;fresh ingrideints carefully sourced to create unforgetable memories</p>
                    </div>
                    <div class="col item social"><a href="#"><i class="icon ion-social-facebook"></i></a><a href="#"><i class="icon ion-social-twitter"></i></a><a href="#"><i class="icon ion-social-snapchat"></i></a><a href="#"><i class="icon ion-social-instagram"></i></a></div>
                </div>
                <p class="copyright">Grapevine © 2021</p>
            </div>
        </footer>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.1.1/aos.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.8.2/js/lightbox.min.js"></script>
    <script src="assets/js/script.min.js"></script>
</body>

</html>
