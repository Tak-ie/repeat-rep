<?php

    class Products extends Db{

        private $tableName = 'menu';
        
        protected $pdo;

        
        private $title;
        private $destination;
        private $image;
        private $id;
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


        public function setId($id){
             $this->id=$id;
        }

        public function printMenu()  {
            return $this->menuItem;
        }
        
        public function setImage(){
            $this->setImage = $image;
        
        }


      
        function selectProperties($column=null,$where = null){

            $columns =['id','title','menu_id','image','price','description','status'];
          
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



   
class Cart extends Db {

    private $id;
    private $title;
    private $price;
    private $quantity;
    private $tableName ='cart';
    
    public function __construct(){
        $this->pdo =$this->connect();
    }
    
    public function getId(){
        return $this->id;
    }
    
    public function setId($id){
        $this->$id;
    }
    
    public function getTitle(){
        return $this->title;
    }
    
    public function setTitle($id){
        $this->$title = $title;
    }
    
    public function getPrice(){
        return $this->price;
    }
    
    public function setPrice($price){
        $this->price = $price;
    }
    
    
    public function getQuantity(){
        return $this->quantity;
    }
    
    public function setQuantity($quantity){
        $this->quantity = $quantity;
    }
    
   
    //retrieve items inside the cart
    public function retrieve(){
        $wher = implode(',', $_SESSION['cart']);
        $sql = "SELECT  id, price,title FROM $this->tableName WHERE id IN  ($wher) ";
            
        $this->pdo = $this->connect();  
        $stmt = $this->pdo->prepare($sql);
        //$stmt->bindParam(1,$age);
        
        $stmt->execute();
        $row=$stmt->rowCount(); 
        if ($row > 0){
            
            $row = $stmt->fetchAll();
                                
                return $row;
        }
        
        return false;
    }
    
    //insert items to cart db
    public function getDetail(){
        $details = $this->retrieve() ;
        //var_dump($details);
        foreach($details as $task){
            $sql = "INSERT INTO $this->tableName(id,title,price) values(?,?,?)";
            $stmt=$this->pdo->prepare($sql);
            if($stmt->execute([$task->id,$task->title,$task->price])){
                echo'sucessful';
            }else{
                echo 'not processed';
            }
            //var_dump($details);
        }
            
        // return $details;
        
    }
    
    //update item quantity
    public function update(){
        $ht = $_SESSION['qty'];
        //var_dump($quantity);
        var_dump($ht);
        $sql = "UPDATE $this->tableName SET quantity = $ht WHERE id = $this->id ";
            $stmt = $this->pdo->prepare($sql);
            $stmt->execute();
            echo 'data updated to db';
        
    }
    
    //get total items inthe cart
    public function getTotal(){
        $num = 0;
        if(isset($_SESSION['cart'])){
            foreach($_SESSION['cart'] as $item){
                $num = $num + $item;
            }
        }
        return $num;
    }
    
    /*
    public function get_price() 
        {
            $price = $this->retrieve();
           
            foreach ($price as $product)
            {
                if ($product -> id == $this->id)
                {
                    var_dump($product -> price);
                    return $product -> price;
                }
                    
            }	
        }*/
    
}

//error class
class  Subscribe{
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
       
    public function inserto($firstName,$lastName,$email){
    
        $sql ="INSERT INTO customer(`Firstname`,`Lastname`,`Email`) VALUES (?,?,?)";
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindParam(1,$firstName);
        $stmt->bindParam(2,$lastName);
        $stmt->bindParam(3,$email);
                
        if($stmt->execute()){
            return "Inserted";
        }
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
        $sql ="INSERT INTO contact_us (`Firstname`, `Lastname`,  `Email`,`Phone`, `Category`,  `Message`) VALUES (?,?,?,?,?,?)";
        $stmt = $this->pdo->prepare($sql);

        $stmt->bindParam(1,$firstname);
        $stmt->bindParam(2,$lastname);
        $stmt->bindParam(3,$email);
        $stmt->bindParam(4,$phone);
        $stmt->bindParam(5,$category);
        $stmt->bindParam(6,$message);

        if($stmt->execute()){
            return "Inserted";
        }
    }     

}




























