<?php
if(array_key_exists('submit',$_POST)){
    $firstName = $_POST['firstName'];
    $lastName =$_POST['lastName'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $category = $_POST['category'];
    $comment =$_POST['comment'];

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

    if(!trim($phone)){
        $error['phone'] = 'phone cannot be empty';
    }
   
    if(!trim($category)){
         foreach( $category as $value){
            return $value;
          }
     }else{
          $error['category'] = 'category cannot be empty';
    }

    if(!trim($comment)){
        $error['comment'] = 'comment cannot be empty';
    }

if(empty($error)){
        $user= new Contact();
        $user->setInto('eric','mulondo','eric@gmail','0769405537','catering','memories of the year');

    }

}