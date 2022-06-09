<?php
//check if form is submitted
if(array_key_exists('submit',$_POST)){

    $fullName = $_POST['fullName'];
    $phoneNo = $_POST['phoneNo'];
    $email =$_POST['email'];
    $address = $_POST['address'];
    $checkbox = $_POST['checkbox'];
//form validation
    $error=[];
    if(!trim($fullName)){
        $error['fullName'] = 'name field cannot be empty';
    }
    if(!trim($phoneNo)){
        $error['phoneNo'] = 'phoneNo cannot be empty';
    }
    if(!trim($email)){
        $error['email'] = 'email cannot be empty';
    }
    if(!trim($address)){
        $error['address'] = 'address cannot be empty';
    }

    if(!trim($checkbox)){
        $error['checkbox'] = 'checkbox  cannot be unchecked';
    }

    if(empty($error)){
        echo 'your order has been proccessed';
        $contacts= new Billing();
        $contacts->details($fullName, $phoneNo, $email, $address);
    }


}
$cart =  Cart::cart();