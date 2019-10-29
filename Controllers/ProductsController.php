<?php
require_once "./Models/ProductsModel.php";
require_once "./Views/ProductsView.php";

class ProductsController {

    private $model;
    private $view;

	function __construct(){
        
        $this->model = new ProductsModel();
        $this->view = new ProductsView();
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

    public function GetProducts(){
        // $this->checkLogIn();
        $products = $this->model->GetProducts();
        $this->view->ShowProducts($products);
    }
    public function GetProduct($param){
        // $this->checkLogIn();
        $id_product = $param[0];
        $product = $this->model->GetProduct($id_product);
        $this->view->ShowProduct($product);
    }
    public function InsertProduct(){
        $this->checkLogIn();
        $this->model->InsertProduct($_POST['name'],$_POST['description'],$_POST['price'],$_POST['stock'],$_POST['image'],$_POST['id_category']);
        header("Location: " . BASE_URL);
    }

    public function DeleteProduct($id){
        $this->checkLogIn();
        $this->model->DeleteProduct($id);
        header("Location: " . BASE_URL);
    }
    function UpdateProduct($param){
        $id_product = $param[0];
        $product = $this->model->GetProduct($id_product);
        $this->view->ShowUpdateProducts("Edit product",$product);
    }
    function SaveUpdateProduct(){
        $id_product = $_POST["id_product"];
        $name = $_POST['name'];
        $description = $_POST['description'];
        $price = $_POST['price'];
        $stock = $_POST['stock'];
        $image = $_POST['image'];
        $id_category = $_POST['id_category'];
        $this->model->SaveUpdateCategory($name,$description,$price,$stock,$image,$id_category,$id_product);
        header("Location: http://".$_SERVER["SERVER_NAME"] .dirname($_SERVER["PHP_SELF"]));
    }
}


?>
