<?php 


if(array_key_exists('subscribe',$_POST)){
    $name = $_POST['FirstName'];
    $lastName =$_POST['LastName'];
    $email = $_POST['Email'];
    

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

    

    if(empty($error)){
        //

        $sub = new Subscriber();
        $obj = $sub->insert('Rudzi','Ramuludzi','vhuthu@gmai.com','register_early.jpg'); 
    }


}

class Display{
    private $name;
    private $title;
    private $image;
    private $message;

    public function __construct($name,$title, $image,$message){

        $this->name = $name;
        $this->title = $title;
        $this->image = $image;
        $this->message =$message;
    }

    public function name(){
        return $this->name;
    }

    public function title(){
        return $this->title;
    }

    public function price(){
        return $this->price;
    }

    public function image(){
        return $this->image;
    }
    public function message(){
        return $this->message;
    }

}

$dsp =new Display('Subscribe for our news letter and products','Sign up','register_early.jpg','We voucher your privacy, no spam!');


     


