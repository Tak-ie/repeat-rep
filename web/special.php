<?php


    if(array_key_exists('sp',$_GET)){
        $act = $_GET['sp'];
        $product = new Products();
        $values = $product->selectProperties('type', $_GET['sp']);
    
    }    
        //var_dump($values);

        
    
    