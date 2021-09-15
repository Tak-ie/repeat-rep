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
        
        function __construct($name,$title,$description,$image){
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

      
/*
        function setProperties( string $name, string $email, string $password){

            $columns =['Id','Title','Menu_id','Image','Price','Description'];
            $values = [$title, $menu_id, $image,$price,$description, $where];
           
            if($this->insert($this->tableName, $columns, $values)){

                echo 'true';
            }else{
                echo 'false';
            }
        }

        function updateProperties( string $title, string $menu_id, string $image,string $price, string $description, $where){

            $columns =['Id','Title','Menu_id','Image','Price','Description'];
            $values = [$title, $menu_id, $image,$price,$description, $where];
            
            if($this->update($this->tableName, $columns, $values, 'id')){

                echo 'true';
            }else{
                echo 'false';
            }
        }*/
        
        function selectProperties($column=null,$where = null){

            $columns =['Id','Title','Menu_id','Image','Price','Description'];
          
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
       
        

        public function __construct($firstname,$lastname, $email){
            $this->pdo = $this->connect();

            $this->firstname = $firstname;
            $this->lastname = $lastname;
            $this->email = $email;
           
            
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

       

     public function insert(){
        
            $sql ="INSERT INTO customer (`Firstname`, `Lastname`,  `Email`) VALUES (?,?,?)";
            $stmt = $this->pdo->prepare($sql);
            $stmt->bindParam(1,$firstname);
            $stmt->bindParam(2,$lastname);
            $stmt->bindParam(3,$email);
            
            $stmt->execute($this->firstname,$this->lastname,$this->email); 
            echo "Info has been inserted to the db";
            

        }
        
       
    
}


   



