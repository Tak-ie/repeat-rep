<?php

$a = Types::VEGGIES;
var_dump($a);
if(array_key_exists('view',$_GET)){
        $View = $_GET['view'];
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
          
        if(empty($value)){
            $result[$i] = $val->type;
            $value[$i] = $val;
            //echo "else";
        }
        else{

            if(  array_key_exists($val->type, $result)){

            }else{
                 $value[$i] = $val;
            }
        }
        $i++;
    }
}

