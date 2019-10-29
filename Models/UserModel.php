<?php

class UserModel {

    private $db;

    function __construct() {
        $this->db = $this->Connect();
    }
    private function Connect(){
        return new PDO('mysql:host=localhost;'.'dbname=mayoristaropa;charset=utf8', 'root', '');
    }
    public function GetPassword($user){
        $sentencia = $this->db->prepare( "SELECT * FROM usuario WHERE usuario = ?");
        $sentencia->execute(array($user));
        $password = $sentencia->fetch(PDO::FETCH_OBJ);      
        return $password;
    }
    public function InsertUser($usuario,$pass,$email,$name,$lastname){
        $sentencia = $this->db->prepare("INSERT INTO usuario(usuario,pass,email,name,lastname) VALUES(?,?,?,?,?)");
        $sentencia->execute(array($usuario,$pass,$email,$name,$lastname));
    }
}

?>
