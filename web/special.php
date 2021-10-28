<?php


    if(array_key_exists('sp',$_GET)){
        $act = $_GET['sp'];
        $user = new User();
        $values = $user->selectProperties('type', $_GET['sp']);
    
    }    
        //var_dump($values);

        
    
    