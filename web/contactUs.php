<?php
if(array_key_exists('submit',$_POST)){
    $firstName = $_POST['firstName'];
    $lastName =$_POST['lastName'];
    $email = $_POST['email'];
    $select = $_POST['selector'];
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
   
    if(!trim($select)){
         foreach( $select as $value){
            return $value;
          }
     }else{
          $error['select'] = 'select cannot be empty';
    }

    if(!trim($comment)){
        $error['comment'] = 'comment cannot be empty';
    }

if(empty($error)){
        $user= new User();
        $obj=$user->insert('eric','mulondo','eric@gmail',);
    }

}