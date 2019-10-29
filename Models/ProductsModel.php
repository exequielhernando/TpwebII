<?php
class ProductsModel{
    private $db;

    function __construct() {
        $this->db = $this->Connect();
    }
    private function Connect(){
        return new PDO('mysql:host=localhost;'.'dbname=mayoristaropa;charset=utf8', 'root', '');
    }
    public function GetProducts(){
        $sentencia = $this->db->prepare( "select p.*, c.name as nameCategoria from producto p join categoria c on p.id_categoria = c.id_coategria");
        $sentencia->execute();
        $products = $sentencia->fetchAll(PDO::FETCH_OBJ);
        
        return $products;
    }
    public function GetProduct($id){
        $sentencia = $this->db->prepare( "select p.*, c.name as nameCategoria from producto p join categoria c on p.id_categoria = c.id_categoria where id_producto = ?");
        $sentencia->execute([$id]);
        $product = $sentencia->fetch(PDO::FETCH_OBJ);

        return $product;
    }
    public function InsertProduct($name,$description,$price,$stock,$image,$id_category){
        $sentencia = $this->db->prepare("INSERT INTO producto(name,description,price,stock,image,id_categoria) VALUES(?,?,?,?,?,?)");
        $sentencia->execute(array($name,$description,$price,$stock,$image,$id_category));
    }
    public function DeleteProduct($id_product){
        $sentencia = $this->db->prepare("DELETE FROM categoria WHERE id_producto=?");
        $sentencia->execute(array($id_product));
    }
    public function SaveUpdateCategory($name,$description,$price,$stock,$image,$id_category,$id){
        $sentencia = $this->db->prepare( "UPDATE tarea SET name=?, description=?, price=?, stock=?, image=?, id_categoria=? where id=?");
        $sentencia->execute(array($name,$description,$price,$stock,$image,$id_category,$id));
      }
   
}

?>