<?php
require_once('libs/Smarty.class.php');
  
class ProductsView{
    private $Smarty;
    
    function __construct() {
        $this->Smarty = new Smarty();
    }
    
    function ShowProducts($Products){
        $this->Smarty->assign('Title',"Lista de Productos");
        $this->Smarty->assign('Products',$Products);
        $this->Smarty->display('templates/products.tpl');
      
    }
    function ShowProduct($Product){
        $this->Smarty->assign('Title',"Producto");
        $this->Smarty->assign('Product',$Product);
        $this->Smarty->display('templates/product.tpl');
      
    }
    function ShowUpdateProducts($Title, $Products){
        $this->Smarty->assign('Title',$Title);
        $this->Smarty->assign('Products',$Products);
        $this->Smarty->assign('home',"http://".$_SERVER["SERVER_NAME"] . dirname($_SERVER["PHP_SELF"]));
        // $this->Smarty->display('templates/mostrarEditarTarea.tpl');
    }
}
?>
