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
        $sub->insert($firstName,$lastName,$email); 
    }


}





     

