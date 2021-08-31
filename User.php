<?php

    class User extends Db{

        protected $pdo;

        function __construct(){
            $this->pdo = $this->connect();
        } 

    const STATUS_PENDING = "Not available";
    const STATUS_DONE = "Available";
    private $name;
    private $destination;
    private $image;
    private $hours;
    private $category;
    private $menu_id;
    private $description;
    private $price;
    private $Title;
    
    public static function allStatuses() {
        return [
            self::STATUS_PENDING,
            self::STATUS_DONE,
        ];
    }

    public static function Description($description) {
        return $description;
    }
    

    public static function getName($name){
        return $name;
    }

    public function getDescription($description){
        return $description;
    }
    public static function getImage($image){
        return $image;
    }
    public static function getPrice($price){
        return $price;
    }

    public static function getTitle($title){
        return $title;
    }

    public function getId($id){
        return $id;
    }

    public function setName($name){
        $this->name=$name;
    }
    public static function getDestination($destination){
        return $destination;
    }

     public static function getMenu_id($menuid){
        return $menuid;
    }

    public function getStatus() {
        return $this->status;
    }

    public static function getHours($hours){
        return $hours;
    }

    public static function printMenu($menuItem)  {
        return $menuItem;
    }
    
    public function setImage(){
        $this->setImage = $image;
    
    }

       function retrieveAll(){

                $sql = 'SELECT * FROM menu';
                $stmt = $this->pdo->prepare($sql);
                $stmt->bindParam(1,$Title);
                $stmt->bindParam(2,$Menu_id);
                $stmt->bindParam(3,$image);
                $stmt->bindParam(4,$price);
                $stmt->bindParam(5,$description);

                $stmt->execute();
                $row=$stmt->rowCount(); 
                if ($row > 0){
                     while($row = $stmt->fetch() ){ 
                        echo $this->title=$row->Title."<br>"  ;             
                        echo $this->id=$row->id."<br>"  ;
                        echo $this->Menu_id=$row->Menu_id."<br>";  
                        echo $this->Image=$row->Image."<br>"; 
                        echo $this->Price=$row->Price."<br>"; 
                        echo $this->description=$row->Description."<br>";

                   }

                         // $row = $stmt->fetchAll();

                   }else
                   {
                    echo "failed to connect";
                        }
    } 
                   // echo true;   
                   // $row = $stmt->fetchAll();

                  // var_dump($row);
                  // }
                
                  //}else{
                   // echo "failed to connect"
                  //}



             public function displayCategories(){
                $sql = "SELECT * FROM category";        
                $stmt = $this->pdo->prepare($sql);
                $stmt->execute();
                $result=$stmt->rowCount(); 
                if($result>0){
                   while($result = $stmt-> fetch()){
                     echo $this->title=$result->name."<br>"  ;             
                        echo $this->status=$result->Status."<br>"  ;
                        //echo $this->image=$row->image."<br>";  
                        echo $this->Image=$result->Image."<br>"; 
                        //echo $this->Price=$row->Price."<br>"; 
                        //echo $this->description=$row->Description."<br>";
                        //var_dump($result);
                        //echo true;
                        //$name= $result['name'];
                        //return $result['name'];
                        //echo result[1]->Id;
                        //echo $result->Price;
                        //echo $this->image=$result->image."<br>"  ;
                        //echo $this->Title=$result->name."<br>"; 
                        //echo $this->Status=$result->Status."<br>";  
                        //echo $this->Image=$result->Image."<br>"; 
                                           
                        }
                    }else{
                            echo false;
                        }
                              
                    }
                        //echo $result;
                        // var_dump($result);
                       
                    
                        
                    public function getImagefilename(){
                        $image_filename=$this->image.'jpg';
                        return $image_filename;
                    }
                   public function getImagePath(){
                        $image_path= "../assets/img/".$this->getImagefilename();
                        return $image_path;
                    }
                     


                     }
                         
       //insert to db
     
       
    
?>