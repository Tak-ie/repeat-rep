<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project1 backup3</title>
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
        <div class="container-fluid"><a class="navbar-brand" href="homepage.php" style="font-weight:bold;font-style:italic;">K&amp;C &nbsp;Restaurant</a><button class="navbar-toggler" data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div
                class="collapse navbar-collapse" id="navcol-1">
                <ul class="nav navbar-nav ml-auto">
                    <li class="nav-item" role="presentation"><a class="nav-link active" href="homepage.php" style="font-size:21px;">Home</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link active" href="Category.php" style="font-size:21px;">Category</a></li>
                    <li class="dropdown"><a class="dropdown-toggle nav-link dropdown-toggle" data-toggle="dropdown" aria-expanded="false" href="#" style="color:#000000;font-size:21px;">Specials</a>
                        <div class="dropdown-menu" role="menu"><a class="dropdown-item" role="presentation" href="specials-1.php">Beef Steak&nbsp;</a><a class="dropdown-item" role="presentation" href="specials-2.php">Beef Stew</a><a class="dropdown-item" role="presentation" href="specials-3.php">Veggies</a></div>
                    </li>
                    <li class="nav-item" role="presentation"><a class="nav-link active" href="Sign up.php" style="font-size:21px;">Sign up</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link active" href="Contact us.php" style="font-size:21px;">Contact us</a></li>
                </ul>
        </div>
        </div>
    </nav>
    <?php require('Db.php');?>
    <?php require ('User.php');?>
    <div class="photo-gallery">
        <div class="container" style="background-color:#61122f;">
            <div class="intro">
                <h2 <?php echo User::getTitle('title');?> class="text-nowrap text-center" style="color:#d6d6d8;">Menu Category</h2>
            </div>
            <div class="row photos">
                <div class="col-sm-6 col-md-4 col-lg-3 item"><a href=<?php echo User::printMenu('menuItem');?>  "assets/img/menun.jpg" data-lightbox="photos"><img class="img-thumbnail img-fluid" src="assets/img/menun.jpg" data-bs-hover-animate="bounce" style="width:330px;height:200px;margin-top:15px;"></a>
                    <p <?php echo User::getTitle('title');?> class="text-center" style="color:#ffffff;margin-bottom:0px;">Steak : R88.00</p>
                    <p class="text-center" style="color:#ffffff;">Available</p>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3 item"><a href=<?php echo User::printMenu('menuItem');?>"assets/img/F-6.jpg" data-lightbox="photos"><img class="img-thumbnail img-fluid" src="assets/img/F-6.jpg" data-bs-hover-animate="bounce" style="height:200px;margin-top:14px;"></a>
                    <p  <?php echo User::getTitle('title');?> class="text-center" style="color:#ffffff;margin-bottom:0px;">Stew :R55.00</p>
                    <p class="text-center" style="color:#ffffff;">Not Available</p>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3 item"><a href=<?php echo User::printMenu('menuItem');?> "assets/img/Cm-1.jpg" data-lightbox="photos"><img class="img-thumbnail img-fluid" src="assets/img/Cm-1.jpg" data-bs-hover-animate="bounce" style="height:200px;padding:4px;padding-top:5px;margin-top:14px;"></a>
                    <p <?php echo User::getTitle('title');?> class="text-center"
                        style="color:#ffffff;margin-bottom:0px;">Salad : R45.00</p>
                    <p class="text-center" style="color:#ffffff;">Not Available</p>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3 item"><a href=<?php echo User::printMenu('menuItem');?>"assets/img/Vg-1.jpg" data-lightbox="photos" style="background-image:url(&quot;assets/img/Vg-1.jpg&quot;);"><img class="img-thumbnail img-fluid" src="assets/img/Vg-1.jpg" data-bs-hover-animate="bounce" style="height:200px;padding:4px;padding-top:4px;margin-top:13px;"></a>
                    <p
                    <?php echo User::getTitle('title');?> class="text-center" style="color:#ffffff;margin-bottom:0px;">&nbsp;mixed veg : R60.00</p>
                        <p class="text-center" style="color:#ffffff;">Available</p>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3 item"><a href=<?php echo User::printMenu('menuItem');?> "assets/img/B8.jpg" data-lightbox="photos"><img class="img-thumbnail img-fluid" src="assets/img/B8.jpg" data-bs-hover-animate="bounce" style="height:200px;margin-top:14px;"></a>
                    <p <?php echo User::getTitle('title');?> class="text-center" style="color:#ffffff;margin-bottom:0px;">Chicken breast :R60.00</p>
                    <p class="text-center" style="color:#ffffff;">Available</p>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3 item"><a href=<?php echo User::printMenu('menuItem');?>"assets/img/C2-2.jpg" data-lightbox="photos"><img class="img-thumbnail img-fluid" src="assets/img/C2-2.jpg" data-bs-hover-animate="bounce" style="height:200px;margin-top:14px;"></a>
                    <p <?php echo User::getTitle('title');?> class="text-center" style="color:#ffffff;margin-bottom:0px;">Mutton stew &nbsp;:R65.00</p>
                    <p class="text-center" style="color:#ffffff;">Available</p>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3 item"><a href=<?php echo User::printMenu('menuItem');?>"assets/img/F-12.jpg" data-lightbox="photos"><img class="img-thumbnail img-fluid" src="assets/img/F-12.jpg" data-bs-hover-animate="bounce" style="height:200px;margin-top:14px;"></a>
                    <p <?php echo User::getTitle('title');?> class="text-center" style="color:#ffffff;margin-bottom:0px;">Steamed veg : R50.00</p>
                    <p class="text-center" style="color:#ffffff;">Available</p>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3 item"><a href=<?php echo User::printMenu('menuItem');?>"assets/img/B10.jpg" data-lightbox="photos"><img class="img-thumbnail img-fluid" src="assets/img/B10.jpg" data-bs-hover-animate="bounce" style="height:200px;margin-top:16px;"></a>
                    <p <?php echo User::getTitle('title');?> class="text-center" style="color:#ffffff;margin-bottom:0px;">sweet meat : R60.00</p>
                    <p class="text-center" style="color:#ffffff;">Available</p>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3 item"><a href=<?php echo User::printMenu('menuItem');?>"assets/img/B6.jpg" data-lightbox="photos"><img class="img-thumbnail img-fluid flex-grow-1 flex-fill" src="assets/img/C19.jpg" alt="bc menu" width="200px" height="400px" data-bs-hover-animate="bounce" style="height:200px;width:330px;margin-top:14px;"></a>
                    <p
                    <?php echo User::getTitle('title');?>class="text-center" style="color:#ffffff;margin-bottom:0px;">Chicken pepper: R59.00</p>
                        <p class="text-center" style="color:#ffffff;">Not available</p>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3 item"><a href=<?php echo User::printMenu('menuItem');?>"assets/img/B13.jpg" data-lightbox="photos"><img class="img-thumbnail img-fluid" src="assets/img/B13.jpg" width="200px" height="200px" data-bs-hover-animate="bounce" style="height:199px;width:330px;margin-top:14px;"></a>
                    <p <?php echo User::getTitle('title');?> class="text-center"
                        style="color:#ffffff;margin-bottom:0px;">Fried chicken : R78.00</p>
                    <p class="text-center" style="color:#ffffff;">Available</p>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3 item"><a href=<?php echo User::printMenu('menuItem');?>"assets/img/C12.jpg" data-lightbox="photos"><img class="img-thumbnail img-fluid" src="assets/img/C12.jpg" data-bs-hover-animate="bounce" style="height:197px;margin-top:14px;"></a>
                    <p <?php echo User::getTitle('title');?> class="text-center" style="color:#ffffff;margin-bottom:9px;">Means &amp; veg : R78.00</p>
                    <p class="text-center" style="color:#ffffff;margin-bottom:0px;">Available</p>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3 item"><a href=<?php echo User::printMenu('menuItem');?>"menu2.jpg" data-lightbox="photos"><img class="img-thumbnail img-fluid" src="assets/img/C15.jpg" data-bs-hover-animate="bounce" style="height:198px;margin-top:14px;"></a>
                    <p <?php echo User::getTitle('title');?> class="text-center" style="color:#ffffff;margin-bottom:0px;">Sweet chicken : R48.00</p>
                    <p class="text-center" style="color:#ffffff;">Available</p>
                </div>
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
                            <li><a href="#">66 Market street</a></li>
                            <li><a href="#">Polokwane &nbsp;0700</a></li>
                            <li><a href="#">Tel no 015 249 8451</a></li>
                        </ul>
                    </div>
                    <div class="col-sm-6 col-md-3 item">
                        <h3>Working hours</h3>
                        <ul>
                            <li><a href="#">Mon - Fri &nbsp;9h00 - 08h30 &nbsp; &nbsp;</a></li>
                            <li><a href="#">Sat &nbsp;09h00 - 21h00</a></li>
                            <li style="color:#a2a8ae;">Sun &nbsp; &nbsp;closed</li>
                        </ul>
                    </div>
                    <div class="col-md-6 item text">
                        <h3>Our mission</h3>
                        <p>Our mission is to ensure that we provide the greatest taste in the world.The food is made to perfection,our chef use &nbsp;fresh ingrideints carefully sourced to create unforgetable memories<br><br></p>
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