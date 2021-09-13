<?php
if(array_key_exists('subscribe',$_POST)){
    $name = $_POST['FirstName'];
    $lastName =$_POST['LastName'];
    $email = $_POST['Email'];
    $select = $_POST['selector'];
    $comment =$_POST['Comment'];

    $error=[];
    if(!trim($name)){
        $error['name'] = 'first name cannot be empty';
    }
    if(!trim($lastName)){
        $error['lastname'] = 'last name cannot be empty';
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