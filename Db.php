<?php 
 
  class Db{

        protected $pdo;

        public function connect(){

            $host = "localhost";
            $db_name = "catalog";
            $user = "root";
            $password = "";

            $this->pdo = null;

            try{
                    
                $dsn = "mysql:hostname=$host;dbname=$db_name";
                $this->pdo = new PDO($dsn, $user, $password);
                $this->pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_WARNING);
                $this->pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
            }
            catch(PDOException $e){

                echo 'Connection Error'.$e->getMessage();
            }

            return $this->pdo;
        }
       
  }
?>
