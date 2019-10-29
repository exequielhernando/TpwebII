<?php
require_once "./view/UserView.php";
require_once "./model/UserModel.php";
class UsuarioController{
    private $view;
    private $model;
    private $Titulo;
    
    function __construct() {
        parent::__construct();
        $this->view = new UserView();
        $this->model = new UserModel();
        $this->Titulo = "Lista de Usuario";
    }
    function InsertarUsuario(){
        $nombre = $_POST["nombre"];
        $password = $_POST["password"];
        $this->model->InsertarUsuario($nombre,$password);
        header("Location: http://".$_SERVER["SERVER_NAME"] .dirname($_SERVER["PHP_SELF"]));
    }
}
?>        