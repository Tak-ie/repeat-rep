<?php 


if(array_key_exists('subscribe',$_POST)){
    $firstName = $_POST['firstName'];
    $lastName =$_POST['lastName'];
    $email = $_POST['email'];
    

    $error=[];
    if(!trim($firstName)){
        $error['firstName'] = 'first name cannot be empty';
    }
    if(!trim($lastName)){
        $error['lastName'] = 'last name cannot be empty';
    }
    if(!trim($email)){
        $error['email'] = 'email cannot be empty';
    }

    

    if(empty($error)){
        //

        $sub = new Subscriber('Rudzi','Ramuludzi','vhuthu@gmai.com');
        $sub->insert($this->firstName,$this->lastName,$this->email); 
    }


}




//$dsp =new Display('Subscribe for our news letter and products','Sign up','register_early.jpg','We voucher your privacy, no spam!');


     


