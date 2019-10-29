<?php
/* Smarty version 3.1.33, created on 2019-10-29 03:47:28
  from 'D:\xampp\htdocs\htdocs\MayoristaRopa\templates\products.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5db7a840936387_74391931',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9c45298763cfe2bb8e6285be52d8108f7c780dfd' => 
    array (
      0 => 'D:\\xampp\\htdocs\\htdocs\\MayoristaRopa\\templates\\products.tpl',
      1 => 1572317247,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5db7a840936387_74391931 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <div class="container">  
        <h1>Lista de Productos</h1>
        <div id="tareas-container" class="container">
            <ul class="list-group">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['Products']->value, 'product');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
?>
                    <li class="list-group-item"><?php echo $_smarty_tpl->tpl_vars['product']->value->name;?>
 ---<?php echo $_smarty_tpl->tpl_vars['product']->value->nameCategoria;?>
 <a href='product/<?php echo $_smarty_tpl->tpl_vars['product']->value->id_producto;?>
'>Ver mas</a></li>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </ul>
        </div>
    </div>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
