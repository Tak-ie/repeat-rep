<?php
if(! isset($_SESSION['cartId'])){
    $cart = new Cart();
}

if( array_key_exists('add', $_GET)){
    $id = $_GET['add'];
    Cart::add($id);
}elseif( array_key_exists('update', $_POST)){
    $id = $_POST['update'];
    $qnt = $_POST['qnt'.$id.'']; 
    Cart::update($id, $qnt);
}elseif( array_key_exists('delete', $_POST)){
    $id = $_POST['delete'];
    Cart::delete($id);
}elseif(array_key_exists('checkout', $_POST)){
    Cart::checkout();
}
$products = Cart::cart();