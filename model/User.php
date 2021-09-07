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
        private $Title;
        
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

        public function getId($id){
            return $id;
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


        public function getHours($hours){
            return $hours;
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
        
        function selectProperties( $where = null){

            $columns =['Id','Title','Menu_id','Image','Price','Description'];
          
            if( $where !== null){

                $values = [$where];
                $effectChange='id'; 
                if($this->select($this->tableName, $columns,$values,'id')){

                    echo $values;
                    
                }else{
                    echo 'false';
                }
            }else{

                if($this->select($this->tableName, $columns)){

                    echo $values;
                }else{
                    echo 'false';
                }
            }
        }

        
        
    }


   



