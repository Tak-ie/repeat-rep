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

<body style="background-color:#61122f;">
    <nav class="navbar navbar-light navbar-expand-md" style="background-color:#EDB518;">
        <div class="container"><a class="navbar-brand" href="homepage.html" style="font-style:italic;letter-spacing:1px;font-weight:bold;">K&amp;C Restaurant</a><button class="navbar-toggler" data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div
                class="collapse navbar-collapse" id="navcol-1">
                <ul class="nav navbar-nav ml-auto">
                    <li class="nav-item" role="presentation"><a class="nav-link active" href="homepage.html" style="font-size:21px;">Home</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link active" href="Category.html" style="font-size:21px;">Category</a></li>
                    <li class="dropdown"><a class="dropdown-toggle nav-link text-monospace dropdown-toggle" data-toggle="dropdown" aria-expanded="false" href="#" style="color:rgb(0,0,0,0.9);font-size:21px;">Specials</a>
                        <div class="dropdown-menu" role="menu"><a class="dropdown-item" role="presentation" href="specials-1.html">Beef Steak</a><a class="dropdown-item" role="presentation" href="specials-2.html">Beef Stew</a><a class="dropdown-item" role="presentation" href="specials-3.html">Veggies</a></div>
                    </li>
                    <li class="nav-item" role="presentation"><a class="nav-link active" href="Sign up.html" style="font-size:21px;">Sign up</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link active" href="Contact us.html" style="font-size:21px;">Contact us</a></li>
                </ul>
        </div>
        </div>
    </nav>

    <?php require('Db.php');?>
    <?php require ('User.php');?>
    <section class="d-inline-flex row" style="padding:12px;width:100%;">
        <div class="menu-tile col-md-6">
            <div class="row">
                <div class="col-sm-5">
                    <div class="menu-photo">
                        <div class="id" style="height:28px;width:42px;margin-bottom:5px;margin-right:5px;">
                            <p <?php echo User::getMenu_id('menu_id');?> style="width:48px;color:#ffffff;">V01</p>
                        </div><img <?php echo User::getImage('image');?> class="img-thumbnail" src="assets/img/C2-2.jpg"></div>
                    <div class="d-flex justify-content-center align-items-center align-content-sm-center align-content-md-center align-content-lg-center align-content-xl-center menu-price"
                        style="color:#ffffff;margin-left:5px;">
                        <p <?php echo User::getPrice('price');?> class="text-center d-flex" style="width:146px;">Price : R65.00</p>
                    </div>
                </div>
                <div class="menu-description col-sm-7">
                    <h3 <?php echo  User::getTitle('title');?> style="color:rgb(255,255,255);">Curry Beef</h3>
                    <p  <?php echo User::getDescription('description');?> class="menu-detail" style="color:#ffffff;"><em>beef sauteed with ionions, carrots, and broccoli.</em>Chunks of seasoned beef and then cooked with potatoes and &nbsp;carrots<br><br><br></p>
                </div>
            </div>
        </div>
        <div class="menu-tile col-md-6" style="margin-bottom:6px;">
            <div class="row">
                <div class="col-sm-5" style="height:234px;">
                    <div class="menu-photo">
                        <div class="id" style="height:28px;width:42px;margin-bottom:5px;margin-right:4px;">
                            <p <?php echo User::getMenu_id('menu_id');?> style="color:#ffffff;">V02</p>
                        </div><img <?php echo User::getImage('image');?> class="img-thumbnail" src="assets/img/F-2.jpg" style="min-width:126px;"></div>
                    <div class="d-flex justify-content-center flex-nowrap menu-price" style="color:#ffffff;margin-left:5px;">
                        <p <?php echo User::getPrice('price');?> class="text-center d-flex" style="width:146px;">Price : R50.00</p>
                    </div>
                </div>
                <div class="menu-description col-sm-7">
                    <h3  <?php echo  User::getTitle('title');?>style="color:white;">Beef &amp; Garlic sauce</h3>
                    <p <?php echo User::getDescription('description');?> class="menu-detail" style="color:rgb(255,255,255);"><em>Beef sauteed with broccoli, mushrooms, and carrots in &nbsp;spicy&nbsp;</em>Chunks of seasoned &nbsp; &nbsp;beef cooked with potatoes, carrots, corn, onion, and peas &nbsp; in a full-flavored sauce.<br><br><br></p>
                </div>
            </div>
        </div>
        <div class="menu-tile col-md-6">
            <div class="row">
                <div class="col-sm-5">
                    <div class="menu-photo">
                        <div class="id" style="height:28px;width:42px;margin-bottom:4px;margin-right:5px;">
                            <p <?php echo User::getMenu_id('menu_id');?> style="width:47px;color:#ffffff;">V03</p>
                        </div><img <?php echo User::getImage('image');?> class="img-thumbnail" src="assets/img/B10.jpg" style="min-width:126px;"></div>
                    <div class="d-flex justify-content-center flex-nowrap menu-price" style="color:#ffffff;margin-left:5px;">
                        <p <?php echo User::getPrice('price');?> class="text-center d-flex" style="width:146px;">Price : R68.00</p>
                    </div>
                </div>
                <div class="menu-description col-sm-7">
                    <h3 <?php echo  User::getTitle('title');?> style="color:white;">Orange Beef</h3>
                    <p <?php echo User::getDescription('description');?> class="menu-detail" style="color:rgb(255,255,255);"><em>chunks of chicken, breaded and deep-fried with sauce containing orange peels; white meat by request.</em><br><br></p>
                </div>
            </div>
        </div>
        <div class="menu-tile col-md-6">
            <div class="row">
                <div class="col-sm-5">
                    <div class="menu-photo">
                        <div class="id" style="height:28px;width:42px;margin-bottom:5px;margin-right:4px;">
                            <p <?php echo User::getMenu_id('menu_id');?> style="width:47px;color:#ffffff;">V04</p>
                        </div><img <?php echo User::getImage('image');?> class="img-thumbnail" src="assets/img/F-6.jpg" style="min-width:126px;height:115px;"></div>
                    <div class="d-flex justify-content-center flex-nowrap menu-price" style="color:#ffffff;margin-left:5px;">
                        <p <?php echo User::getPrice('price');?> class="text-center d-flex" style="width:146px;">Price : R60.00</p>
                    </div>
                </div>
                <div class="menu-description col-sm-7">
                    <h3 <?php echo  User::getTitle('title');?> style="color:white;">Beef with Eggplant&nbsp;<br></h3>
                    <p <?php echo User::getDescription('description');?> class="menu-detail" style="color:rgb(255,255,255);">Cubed beef, eggplant, and zucchini, stewed with tomato, chopped onion and pepper, chilies, and seasoned with cumin, coriander, garlic &nbsp;and other spices.<br><br><br><br></p>
                </div>
            </div>
        </div>
        <div class="menu-tile col-md-6">
            <div class="row">
                <div class="col-sm-5">
                    <div class="menu-photo">
                        <div class="id" style="height:28px;width:42px;margin-bottom:4px;margin-right:5px;">
                            <p <?php echo User::getMenu_id('menu_id');?> style="width:47px;color:#ffffff;">V05</p>
                        </div><img <?php echo User::getImage('image');?> class="img-thumbnail" src="assets/img/Dk-3.jpg" style="min-width:126px;"></div>
                    <div class="d-flex justify-content-center flex-nowrap menu-price" style="color:#ffffff;margin-left:5px;">
                        <p  <?php echo User::getPrice('price');?> class="text-center d-flex" style="width:146px;">Price : R65.00</p>
                    </div>
                </div>
                <div class="menu-description col-sm-7">
                    <h3 <?php echo  User::getTitle('title');?> style="color:white;">&nbsp;Broccoli Beef&nbsp;</h3>
                    <p <?php echo User::getDescription('description');?> class="menu-detail" style="color:rgb(255,255,255);">This is a hearty and flavorful vegetable beef stew &nbsp;with brocoli, carrots, and a thickened broth. &nbsp;The condensed beef broth gives it more beef flavor than just plain water or stock<br><br></p>
                </div>
            </div>
        </div>
        <div class="menu-tile col-md-6">
            <div class="row">
                <div class="col-sm-5">
                    <div class="menu-photo">
                        <div class="id" style="height:28px;width:43px;margin-right:5px;margin-bottom:4px;">
                            <p <?php echo User::getMenu_id('menu_id');?> style="width:47px;color:#ffffff;">V06</p>
                        </div><img <?php echo User::getImage('image');?> class="img-thumbnail" src="assets/img/D3.jpg" style="min-width:126px;"></div>
                    <div class="d-flex justify-content-center flex-nowrap menu-price" style="color:#ffffff;margin-left:5px;">
                        <p <?php echo User::getPrice('price');?> class="text-center d-flex" style="width:146px;">Price : R55.00</p>
                    </div>
                </div>
                <div class="menu-description col-sm-7">
                    <h3 <?php echo  User::getTitle('title');?> style="color:white;">Sessame Beef</h3>
                    <p <?php echo User::getDescription('description');?> class="menu-detail" style="color:rgb(255,255,255);"><em>chunks of beef, breaded and deep-fried with &nbsp;sesame seed &nbsp;and browned sauce</em><br><br></p>
                </div>
            </div>
        </div>
    </section>
    <div class="footer-dark">
        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-md-3 item">
                        <h3>Address</h3>
                        <ul>
                            <li><a href="#">128 landrossmare street</a></li>
                            <li><a href="#">Polokwane &nbsp;0700</a></li>
                            <li><a href="#">Tel no 015 294 8451</a></li>
                        </ul>
                    </div>
                    <div class="col-sm-6 col-md-3 item">
                        <h3>Hours</h3>
                        <ul>
                            <li><a href="#">Mon &nbsp; Fri 09h00-20h30</a></li>
                            <li><a href="#">Sat &nbsp; &nbsp;09h00 -21h00</a></li>
                            <li><a href="#">Sun &nbsp; Closed</a></li>
                        </ul>
                    </div>
                    <div class="col-md-6 item text">
                        <h3>Company Name</h3>
                        <p>Our mission is to ensure that we provide the greatest taste in the world.The food is made to perfection,our chef use &nbsp;fresh ingrideints carefully sourced to create unforgetable memories<br><br></p>
                    </div>
                    <div class="col item social"><a href="#"><i class="icon ion-social-facebook"></i></a><a href="#"><i class="icon ion-social-twitter"></i></a><a href="#"><i class="icon ion-social-snapchat"></i></a><a href="#"><i class="icon ion-social-instagram"></i></a></div>
                </div>
                <p class="copyright">K&amp;C Restaurant © 2021</p>
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