<?php 
$cart = new Cart();
if(empty($_SESSION['cart'])){
    $_SESSION['cart'] = array();

}

if(isset($_GET['id'])){
    $id = $_GET['id'];
    echo $id;
    array_push($_SESSION['cart'],$_GET['id']);
}
var_dump($_SESSION['cart']);


$_SESSION['cart']= $cart->find();

$cart->insertInto($_SESSION['cart']);
var_dump($_SESSION['cart']);
var_dump($cart);







  