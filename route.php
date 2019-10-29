<?php

    require_once "Controllers/ProductsController.php";
    define("BASE_URL", 'http://'.$_SERVER["SERVER_NAME"].':'.$_SERVER["SERVER_PORT"].dirname($_SERVER["PHP_SELF"]).'/');

    $controller = new ProductsController();
    
    $partesURL = explode('/', $_GET['action']);
    
    if ($partesURL[0] == ''){
        $controller->GetProducts();
    }
    else{
        if ($partesURL[0] == 'insertproduct'){
            $controller->InsertProduct();
        }elseif ($partesURL[0] == 'deleteproduct') {
            $controller->DeleteProduct($partesURL[1]);
        }elseif ($partesURL[0] == 'product') {
            $controller->GetProduct($partesURL[1]);
        }
    }
?>