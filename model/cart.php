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


final class Cart {

    private static $price = 0;

    public function __construct(){
 
        $_SESSION['cartId'] = $cart = (new CartDao())->create();
    }

    public static function add(){
        $id = Helper::getUrlParam('id');
    
        $_SESSION['cart'][$id] = $id;

        Helper::redirect('list');

        //$page = explode('?', $_SERVER['HTTP_REFERER']);
        /*$page = explode('&', @$page[1]);
        $size = sizeof($page);

        for($i = 0; $i <= $size - 1; $i++){
            $page[] = explode('=', $page[$i]);
        }
        $param = [];
        for($i = $size+1; $i <= ($size*2)-1; $i++){
            $param = [$page[$i][0] => $page[$i][1]];
        }

        if(! $param == null){
            Helper::redirect($page[$size][0], $param);
        }else{
            Helper::redirect($page[$size][0]);
        }*/
    }

    public static function delete(){
        $id = Helper::getUrlParam('id');

        unset($_SESSION['cart'][$id]);

        Helper::redirect('list');
        /*
        $page = explode('?', $_SERVER['HTTP_REFERER']);
        $page = explode('&', @$page[1]);
        $size = sizeof($page);

        for($i = 0; $i <= $size - 1; $i++){
            $page[] = explode('=', $page[$i]);
        }
        $param = [];
        for($i = $size+1; $i <= ($size*2)-1; $i++){
            $param = [$page[$i][0] => $page[$i][1]];
        }

        if(! $param == null){
            Helper::redirect($page[$size][1], $param);
        }else{
            Helper::redirect($page[$size][1]);
        }*/
    }

    public static function view(){
        $i = 0;
        $products[] = new Product;
        foreach( $_SESSION['cart'] as $pdt){
            $product = new ProductDao();
            $products[$i++] = $product->selectProperties('id',(int)$pdt);
        }
        foreach( $products as $pdt){
            self::$price += $pdt->getPrice();
        }
        return $products;
    }

    public static function button( int $id){

        if(! @array_key_exists( $id, @$_SESSION['cart'])){
            return '<p><a class="btn btn-success float-right" type="button" 
                        href="'.Helper::createLink('cart', ['id'=> $id,'cart' => 'add']).
                            '" class="card-link" style="marging-left:10px;">add Cart</a></p>';
        }
        else{
            return '<p><a class="btn btn-danger float-right" type="button"
                        href="'. Helper::createLink('cart', ['id' => $id,'cart' => 'delete']).
                            '" class="card-link" style="marging-left:10px;">X</a></p>';
        }
    }

    public static function count(){
        
        return isset($_SESSION['cart'])?sizeof($_SESSION['cart']):0;
    }

    public static function total(){
        return self::$price;
    }
}
