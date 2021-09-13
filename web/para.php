<?php
final class Product{

private $name;
private $title;
private $price;
private $image;
private $description;


function __construct(){

}

public function setParam( $product){

    if(array_key_exists('name', $product)){
        $this->name = $product->name;
    }

    if(array_key_exists('title', $product)){
        $this->title = $product->title;
    }

    if(array_key_exists('price', $product)){
        $this->price = $product->price;
    }

    if(array_key_exists('description', $product)){
        $this->description = $product->description;
    }

    if(array_key_exists('price', $product)){
        $this->price = $product->price;
    }

    if(array_key_exists('description',$product)){
        $this->description = $product->description;
    }
}

public function getname(){
    return $this->name;
}

public function getTitle(){
    return $this->title;
}

public function getPrice(){
    return $this->price;
}

public function getImage(){
    return $this->description;
}

public function getDescription(){
    return $this->price;
}




}
