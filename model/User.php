<?php

    class User extends Db{

        private $tableName = 'menu';
        

        
        protected $pdo;

        
        private $title;
        private $destination;
        private $image;
        private $hours;
        private $category;
        private $menu_id;
        private $description;
        private $price;
        private $name;
        private $status;
        
        function __construct(){
            $this->pdo = $this->connect();
        } 
        
        public  function Description() {
            return $this->description;
        }
        

        public function getName(){
            return $this->name;
        }

        public function getDescription(){
            return $this->description;
        }
        public  function getImage(){
            return $this->image;
        }
        public  function getPrice(){
            return $this->price;
        }

        public  function getTitle(){
            return $this->title;
        }

        public function getId(){
            return $this->id;
        }
        public function getStatus(){
            return $this->status;
        }

        public function setName($name){
            $this->name=$name;
        }
        public  function getDestination(){
            return $this->destination;
        }

        public function getMenu_id(){
            return $menuid;
        }


        public function getHours(){
            return $this->hours;
        }

        public function printMenu()  {
            return $this->menuItem;
        }
        
        public function setImage(){
            $this->setImage = $image;
        
    }

      

        
        function selectProperties($column=null,$where = null){

            $columns =['Id','Title','Menu_id','Image','Price','Description','Status'];
          
            if( $where !== null){

                $values = [$where];
                 
                $result= $this->select($this->tableName, $columns,$values,$column);
                return $result;
            }else{

                $result= $this->select($this->tableName, $columns);
                return $result;
            }
        }   
    }

//error class
class  Subscribe extends Db{
    private $source;
    private $message;

    public function __constructor($source,$message){
        $this->source=$source;
        $this->message= $message;

    }
    public function getsource(){
        return $this->$source;

    }
    public function getMessage(){
        return $this->message;


    }
}

//form class
class Subscriber extends Db{
   
        private $firstname;
        private $lastname;
        private $email;
       
        public function __construct(){
            $this->pdo = $this->connect();
    
        }

        public function firstname(){
            return $this->firstname;
        }

        public function lastname(){
            return $this->lastname;
        }

        public function email(){
            return $this->email;
        }
       
       

     public function inserto(){
        
            $sql ="INSERT INTO customer (`Firstname`, `Lastname`,  `Email`, ) VALUES (?,?,?)";
            $stmt = $this->pdo->prepare($sql);
            //$stmt->bindParam(1,$firstname);
            //$stmt->bindParam(2,$lastname);
            //$stmt->bindParam(3,$email);
            
            if($stmt->execute([$this->firstname,$this->lastname,$this->email]))
                echo "Info has been inserted to the db";
            

        }
        
       
    
}


//contact us class

class Contact extends Db{

       private $firstname;
       private $lastname;
       private $email;
       private $phone;
       private $category;
       private $message;
            
    

       public function __construct(){
        $this->pdo = $this->connect();
        
    }

            public function firstname(){
                return $this->firstname;
            }

            public function lastname(){
                return $this->lastname;
            }

            public function email(){
                return $this->email;
            }

            public function phone(){
                return $this->phone;
            }
            public function category(){
                return $this->category;
            }

            public function message(){
                return $this->message;
            }

//insert into db

            public function  setInto($firstname,$lastname, $email,$phone,$category,$message){
            $sql ="INSERT INTO customer (`Firstname`, `Lastname`,  `Email`, ) VALUES (?,?,?)";
            $stmt = $this->pdo->prepare($sql);
            $stmt->bindParam(1,$firstname);
            $stmt->bindParam(2,$lastname);
            $stmt->bindParam(3,$email);
            $stmt->bindParam(4,$phone);
            $stmt->bindParam(5,$category);
            $stmt->bindParam(6,$message);
            $stmt->execute([$this->firstname,$this->lastname,$this->email,$this->phone,$this->category,$this->message]); 
            echo "Info has been inserted to the db";
           
          }          

        }




   



