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

            throw $e;
        }
        return $this->pdo;
    }

  /**  
     * Select Method Api
     *
     * @param $tableName name of table
     * @param Arr $columns   name of the column
     * @param default:null $where     name of column
     * @param $values value for the where column
     * 
     * @return Sql/False
     **/      
  protected function select(string $tableName, $columns, $values = null, $where = null)
  {
          
          $string = implode(',' , $columns);

          $sql = "
              SELECT $string FROM $tableName 
          ";

      if ($where !== null) {
            $sql = $sql ." WHERE $where = ?";
      }

          $stmt = $this->pdo->prepare($sql);

          if($values !== null){

              $stmt->execute($values);

            }else{
             
              $stmt->execute();
            }
               $num = $stmt->rowCount();
  
              if( $num > 0){
          
                $row = $stmt->fetchAll();
          
                return $row;
              }
        return false;
    }       
}
?>
