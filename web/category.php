<?php

if(array_key_exists('view',$_GET)){
        $act = $_GET['view'];
        $user = new User();
        $values = $user->selectProperties('type', $_GET['view']);
    
    }  

