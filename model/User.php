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
 
 /**  
     * SelectProperties Method Api
     *
     * @param Arr $columns name of the table
     * @param default:null $where name of column
     * @param default:null $column  of the table
     * 
     * @return Sql
     **/ 

        function selectProperties($column=null,$where = null){
            try{
                $columns =['id','title','menu_id','image','price','description','status','type', 'special'];
            
                if( $where !== null){

                    $values = [$where];
                    
                    $result= $this->select($this->tableName, $columns,$values,$column);
                    return $result;
                }else{

                    $result= $this->select($this->tableName, $columns);
                    return $result;
                }
            }catch(PDOException $e){
                throw $e;
            }    
        }  
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
     
     /**  
     * inserto Method
     * @param insert items into the database
     * @param arguments are columns   name of the column
     * @access  public
     * @param $values value for the where column
     * 
     * @return string
     **/ 
    public function inserto($firstName,$lastName,$email){
        try{
            $sql ="INSERT INTO customer(`Firstname`,`Lastname`,`Email`) VALUES (?,?,?)";
            $stmt = $this->pdo->prepare($sql);
            $stmt->bindParam(1,$firstName);
            $stmt->bindParam(2,$lastName);
            $stmt->bindParam(3,$email);
                    
            if($stmt->execute()){
                return "Inserted";
            }
        }catch(PDOException $e){
            throw $e;
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

    public function getFirstname(){
        return $this->firstname;
    }

    public function setFirstname($firstName){
         $this->firstname = $firstName;
    }

    public function getLastname(){
        return $this->lastname;
    }

    public function setLastname($lastName){
         $this->lastname = $lastName;
    }
    public function getEmail(){
        return $this->email;
    }

    public function setEmail($email){
        return $this->email = $email;
    }

    public function getPhone(){
        return $this->phone;
    }

    public function setPhone($phone){
        $this->phone = $phone;
    }
    public function getCategory(){
        return $this->category;
    }

    public function setCategory($category){
         $this->category = $category;
    }

    public function getMessage(){
        return $this->message;
    }

    public function setMessage($message){
         $this->message = $message;
    }
 
     /**  
     * setinto Method  //insert into db
     * @param insert items into the database table
     * @param arguments are columns   name of the table
     * @access  public 
     * @return string
     **/
  
    public function  setInto($firstname,$lastname, $email,$phone,$category,$message){

        try{
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
        }catch(PDOException $e){
            throw $e;
        }    
    }     
}



/**  
     *@param abstract class type
     * @param declare menu types using enumeration
     * @param default:const variables
     * @return null
    
     **/

abstract class Types{

    const VEGGIES = 2;
    const CHICKEN = 3;
    const STEW = 1;
    const BEEF = 0;
}

class Cart{
    private static $price = 0;
    private static $qnt;
    public function __construct(){
        //declare sessions 
        $_SESSION['cartId'] = rand(0,25);
        $_SESSION['cart'] = [];
        $_SESSION['qnt'] = [];
    }
    /**  
     * add  Method 
     * @param add items to the cart
     * @param sets session cart
     * @param initialise default quantiy
     **/
//add product ids to the cart
    public static function add(int $id){
            $_SESSION['cart'][$id] = $id;
            $_SESSION['qnt'][$id] = 1;   
    }

    /**  
     * update  Method  
     * @param update quantity depending on id
     * @param int,int
     * @access public
     **/

    public static function update(int $id, int $qnt){
        $_SESSION['qnt'][$id] = $qnt;
    }

    /**  
     * delete  Method  
     * @param unset cart & quantity depending on id of product
     * @param int
     * @access public
     **/

    public static function delete( int $id){
        unset($_SESSION['cart'][$id]);
        unset($_SESSION['qnt'][$id]);
    }

     /**  
     * Cart Method 
     *
     * @param nested foreach loop to getitems
     * @param calls product class
     * @param retrieve items using nested loops
     * @param calculate current price by quantity 
     * @return $products
     **/ 
//calls products methods,nested foreach loop,getitems inside the nested loop,returns/calculate total price
    public static function cart(){
        try{
            $products[] = new Products;
            foreach( $_SESSION['cart'] as $pdt){
                $product = new Products();
                $products[$pdt] = $product->selectProperties('id',(int)$pdt);
            
                $curbal = $products[$pdt][0]->price * $_SESSION['qnt'][$pdt];

                self::$price += $curbal;
            }
            return $products;
        }catch(Exception $e) {
            throw $e;
        }   
    }

     /**  
     * getPrice  Method 
     * 
     * @return return price through the static property
     **/ 

    public static function getPrice(){
        return self::$price;
    }
     /**  
     * getQnt  Method 
     * 
     * @return return all products through the static property
     **/

    public static function getQnt(){
        self::$qnt = $_SESSION['qnt'];
        return self::$qnt;
    }
    /**  
     * getQnt  Method 
     * 
     * @return return single products through the static property
     **/
    public static function qnt(int $id){
        $qnt = self::getQnt();
        return $qnt[$id];
       
    } 
    /**  
     * btn  Method 
     * @param int:id of the product
     * @return display button only when item is available
     **/

    public static function btn(int $id){
        if(! array_key_exists($id, $_SESSION['cart']))
            return '<a href="food&add='.$id.'"><button class="btn btn-dark btn-sm" 
                        name ="addtocart" type="button">Order</button></a>';
    }

    public static function checkout(){
        
       unset($_SESSION['cartId']);
    }
}


class Billing extends Db{
    private $tableName = 'users';
    private $fullName;
    private $phoneNo;
    private $email;
    private $address;
    private $cashOnDelivery;    
    
    public function __construct(){
        $this->pdo = $this->connect(); 
    }

    public function getFullName(){
        return $this->fullName;
    }

    public function setFullName($fullName){
         $this->fullName =$fullName;
    }

    public function getPhoneNo(){
        return $this->phoneNo;
    }

    public function setPhoneNo($phoneNo){
         $this->phoneNo = $phoneNo;
    }

    public function getEmail(){
        return $this->email;
    }

    public function setEmail($email){
         $this->email =$email;
    }
    public function getAddress(){
        return $this->address;
    }

    public function setAddress($address){
         $this->address = $address;
    }
    
    //insert delivery details to the db
    public function  details($fullName,$phoneNo, $email){
        try{
            $sql ="INSERT INTO `customer` (`firstname`, `lastname`, `email`) VALUES (?,?,?)";
            $stmt = $this->pdo->prepare($sql);

            $stmt->bindParam(1,$fullName);
            $stmt->bindParam(2,$phoneNo);
            $stmt->bindParam(3,$email);
            //$stmt->bindParam(4,$address);
            if($stmt->execute()){
                return "Inserted";
            }
        }catch(PDOException $e){
            throw $e;
        }    
    }
}    























