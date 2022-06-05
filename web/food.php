<?php

 if(array_key_exists('id', $_GET) ){
        $id = $_GET['id'];
        if( is_int($id))
            throw new Exception("The current id is not allowed");
    }

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
}

if( @sizeof($_SESSION['cart']) < 0 ){
    throw new Exception("You cart is currently empty");
}

$products = Cart::cart();

//var_dump(Cart::qnt(10));