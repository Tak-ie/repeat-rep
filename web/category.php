<?php

 
if(array_key_exists('view',$_GET)){
        $act = $_GET['view'];
        $Products = new Products();
        $values = $Products->selectProperties('type', $_GET['view']);
    
    } 
