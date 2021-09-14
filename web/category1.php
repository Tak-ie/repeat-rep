<?php 
if(array_key_exists('search',$_POST)){
    $name = $_POST['search'];


    $error=[];
    if(!trim($name)){
        $error['name'] = 'first name cannot be empty';
    }

    if(empty($error)){
        //

        
    }

}