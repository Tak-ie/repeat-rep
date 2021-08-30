<?php 

    include("Db.php");
    include("User.php");

    $user = new User();

     $user->fetchAll();
     $user->displayCategories();
     $user->getImagefilename();
     $user->getImagePath();
     $user->getImagePath();


