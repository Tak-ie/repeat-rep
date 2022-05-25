<?php

class CartDao extends Db
{
    private $tableName = 'cart';

    private $column = ['id','product'];

    function __construct(){

        $this->pdo = $this->connect();
    }

    public function create(){

        $sql = "
                SELECT id FROM $this->tableName
            ";
        
        $stmt = $this->pdo->prepare($sql);

        $stmt->execute();
        $num = $stmt->rowCount();

        return ++$num;
    }

    public function inser( int $id){

        $sql = "
            Insert Into $this->tableName(id) Values(?)
        ";
     
        $value = [$id];
        $stmt = $this->pdo->prepare($sql);

        if ($stmt->execute($value)) {

                return true;
        } 
            throw new Exception("Failed to save");
    }

    public function add(array $pdt, int $id){

        //$pdt = implode(',', $pdt);

        $sql = "
            Update $this->tableName set product = ? where id = ?
        ";

        //$value = [$pdt, $id];

        $stmt = $this->pdo->prepare($sql);
        $stmt->bindParam(1,$pdt);
        $stmt->bindParam(2,$id);

        if ($stmt->execute()) {

            return true;
        } 
            throw new Exception("Failed to update query");
    }

    public function fetch( int $id){

        $sql = "
                SELECT product FROM $this->tableName where id = ?
            ";
        
        $stmt = $this->pdo->prepare($sql);

        $value = [$id];
        $stmt->execute($value);
        
        $row = $stmt->fetchAll();

        return $row[0];
    }

}