<?php 

$cart = new Cart();
$new = $cart->update();
var_dump($new);
//adding items to cart
//$_SESSION['cart'] = array();
if(empty($_SESSION['cart'])){
    $_SESSION['cart'] = array();
}
    array_push($_SESSION['cart'],$_GET['id']);

    array_push($_SESSION['cart'],$_GET['id']);
    //var_dump($_SESSION['cart']);
 
    //updating quantity

    if(isset($_POST['update'])){
     //echo 'passed';
     $quantity = $_POST['quant'];
     
     $_SESSION['qty'] = array();
   
     $_SESSION['qty'] = $quantity;
   
    var_dump($quantity);
       
    
   }

   //retrieving details from cart
    $products = $cart->Retrieve();
    $add = $cart->getDetail();
    var_dump($products);
    //var_dump($add);
    $new = $cart->update();
    var_dump($new);









  