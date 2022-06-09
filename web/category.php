<?php
    $types = [Types::BEEF, Types::STEW, Types::VEGGIES, Types::CHICKEN];
    //retrieve product according to the view  selected
    if(array_key_exists('view',$_GET)){
        $view = $_GET['view'];
        if( array_key_exists($view, $types)){
            $Products = new Products();
            $values = $Products->selectProperties('type', $view);
        }else{
            throw new NotFoundException('The current '.$view.' food category is unavailable');
        }
    }else{
        //Retrieve products from db according to type using random number
        $Products = new Products();
        $i = 0;
        foreach( $types as $val ){
            $value = $Products->selectProperties('type', $val );
            $limit = rand(0,sizeof($value)-1);
            $values[$i++] = $value[$limit];
        }  
    }

