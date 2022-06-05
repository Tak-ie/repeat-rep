<?php

$types = [Types::BEEF, Types::STEW, Types::VEGGIES, Types::CHICKEN];

$Products =new Products();
$i = 0;
foreach( $types as $val ){
    $values[$i++] =  $Products->selectProperties('type', $val );
}