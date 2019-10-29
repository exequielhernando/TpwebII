<?php
require_once('libs/Smarty.class.php');
class LoginView{
    private $smarty;
    
    function __construct() {
        $this->smarty = new Smarty();
    }
    function mostrarLogin($message = ''){
        $this->smarty->assign('Title',"Login");
        $this->smarty->assign('Message',$message);
        $this->smarty->display('templates/login.tpl');
    }
}
?>