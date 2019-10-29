<?php
require_once('libs/Smarty.class.php');
  
class CategoryView{
    private $Smarty;
    
    function __construct() {
        $this->Smarty = new Smarty();
    }
    
    function ShowCategories($Title, $Category){
        $this->Smarty->assign('Title',$Title);
        $this->Smarty->assign('Category',$Category);
        // $this->Smarty->display('templates/home.tpl');
      
    }
    function ShowUpdateCategory($Title, $Category){
        $this->Smarty->assign('Title',$Title);
        $this->Smarty->assign('Category',$Category);
        $this->Smarty->assign('home',"http://".$_SERVER["SERVER_NAME"] . dirname($_SERVER["PHP_SELF"]));
        // $this->Smarty->display('templates/mostrarEditarTarea.tpl');
    }
}
?>