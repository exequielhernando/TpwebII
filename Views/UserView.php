<?php
require_once('libs/Smarty.class.php');
class UserView{
    
    private $Smarty;
    
    function __construct() {
        $this->Smarty = new Smarty();
    }
    
    function Mostrar($Title, $Users){
        $this->Smarty->assign('Title',$Title);
        $this->Smarty->assign('Users',$Users);
        // $this->Smarty->display('templates/mostrarUsuarios.tpl');
    }    
}
?>