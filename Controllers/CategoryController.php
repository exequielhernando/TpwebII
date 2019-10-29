<?php
require_once "./Models/CategoryModel.php";
require_once "./Views/CategoryView.php";

class CategoryController {

    private $model;
    private $view;

	function __construct(){
        
        $this->model = new CategoryModel();
        $this->view = new CategoryView();
    }
    
    public function checkLogIn(){
        session_start();
        
        if(!isset($_SESSION['userId'])){
            header("Location: " . URL_LOGIN);
            die();
        }

        if ( isset($_SESSION['LAST_ACTIVITY']) && (time() - $_SESSION['LAST_ACTIVITY'] > 5000)) { 
            header("Location: " . URL_LOGOUT);
            die(); // destruye la sesión, y vuelve al login
        } 
        $_SESSION['LAST_ACTIVITY'] = time();
    }

    public function GetCategories(){
        $this->checkLogIn();
        $categories = $this->model->GetCategories();
        $this->view->ShowCategories($categories);
    }

    public function InsertCategory(){
        $this->checkLogIn();
        $this->model->InsertCategory($_POST['name'],$_POST['description']);
        header("Location: " . BASE_URL);
    }

    public function DeleteCategory($id){
        $this->checkLogIn();
        $this->model->DeleteCategory($id);
        header("Location: " . BASE_URL);
    }
    function UpdateCategory($param){
        $id_category = $param[0];
        $category = $this->model->GetCategory($id_category);
        $this->view->ShowUpdateCategory("Edit Category",$category);
    }
    function SaveUpdateCategory(){
        $id_category = $_POST["id_category"];
        $name = $_POST['name'];
        $description = $_POST['description'];
        $this->model->SaveUpdateCategory($name,$description,$id_category);
        header("Location: http://".$_SERVER["SERVER_NAME"] .dirname($_SERVER["PHP_SELF"]));
    }
}


?>
