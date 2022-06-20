<?php
//check if session is set
if(! isset($_SESSION['cartId'])){
    $cart = new Cart();
}

//gets the id of added item
if( array_key_exists('add', $_GET)){
    $id = $_GET['add'];
    Cart::add($id);
    //update it if available
}elseif( array_key_exists('update', $_POST)){
    $id = $_POST['update'];
    $qnt = $_POST['qnt'.$id.'']; 
    Cart::update($id, $qnt);
    //delete if 
}elseif( array_key_exists('delete', $_POST)){
    $id = $_POST['delete'];
    Cart::delete($id);
}

$products = Cart::cart();