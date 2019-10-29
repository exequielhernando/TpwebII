<?php

class CategoryModel{
    
    private $db;
    
    function __construct() {
        $this->db = $this->Connect();
    }
    private function Connect(){
        return new PDO('mysql:host=localhost;'.'dbname=mayoristaropa;charset=utf8', 'root', '');
    }
    public function GetCategories(){
        $sentencia = $this->db->prepare( "select * from categoria");
        $sentencia->execute();
        $categories = $sentencia->fetchAll(PDO::FETCH_OBJ);
        
        return $categories;
    }
    public function GetCategory($id){
        $sentencia = $this->db->prepare( "select * from categoria where id = ?");
        $sentencia->execute([$id]);
        $category = $sentencia->fetch(PDO::FETCH_OBJ);
        
        return $category;
    }
    public function InsertCategory($name,$description){
        $sentencia = $this->db->prepare("INSERT INTO categoria(name,description) VALUES(?,?)");
        $sentencia->execute(array($name,$description));
    }
    public function DeleteCategory($id_category){
        $sentencia = $this->db->prepare("DELETE FROM categoria WHERE id_category=?");
        echo ($id_category);
        $sentencia->execute(array($id_category));
    }
    public function SaveUpdateCategory($name,$description,$id){
        $sentencia = $this->db->prepare( "UPDATE tarea SET name = ?, description = ? where id=?");
        $sentencia->execute(array($name,$description,$id));
      }
   

}
?>