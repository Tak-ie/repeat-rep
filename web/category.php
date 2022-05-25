<?php

if(array_key_exists('view',$_GET)){
        $act = $_GET['view'];
        $Products = new Products();
        $values = $Products->selectProperties('type', $_GET['view']);
}else{
    $Products = new Products();
    $values = $Products->selectProperties();
//var_dump($values);
    $result = [];
    $value= [];
    $i = 0;
    foreach($values as $val){
        if(array_key_exists($val->type, $result)){
           $value[$i] = $val; 
           $result[$i] = $val->type;
        }elseif(empty($value)){
            $result[$i] = $val->type;
            $value[$i] = $val;
            //echo "else";
        }
        echo $i;
        $i++;
        
    }
}
