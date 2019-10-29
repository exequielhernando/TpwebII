<?php
/* Smarty version 3.1.33, created on 2019-10-29 03:44:42
  from 'D:\xampp\htdocs\htdocs\MayoristaRopa\templates\product.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5db7a79a4ece01_53896703',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b6419e5c514c14dc94c9ee3269ba8e02c0ea9043' => 
    array (
      0 => 'D:\\xampp\\htdocs\\htdocs\\MayoristaRopa\\templates\\product.tpl',
      1 => 1572317049,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5db7a79a4ece01_53896703 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <div class="container">  
        <h1><?php echo $_smarty_tpl->tpl_vars['Product']->value->name;?>
ss</h1>
        <div id="tareas-container" class="container">
            <ul class="list-group">
                <li class="list-group-item"><?php echo $_smarty_tpl->tpl_vars['Product']->value->description;?>
</li>
                <li class="list-group-item"><?php echo $_smarty_tpl->tpl_vars['Product']->value->price;?>
</li>
                <li class="list-group-item"><?php echo $_smarty_tpl->tpl_vars['Product']->value->stock;?>
</li>
                <li class="list-group-item"><?php echo $_smarty_tpl->tpl_vars['Product']->value->image;?>
</li>
                <li class="list-group-item"><?php echo $_smarty_tpl->tpl_vars['Product']->value->nameCategoria;?>
</li>
                <li class="list-group-item"><button type="button" class="btn btn-success"><a href="editpruduct/<?php echo $_smarty_tpl->tpl_vars['Product']->value->id_producto;?>
">Edit product</a></button></li>
                <li class="list-group-item"><button type="button" class="btn btn-danger"><a href="deletepruduct/<?php echo $_smarty_tpl->tpl_vars['Product']->value->id_producto;?>
">Delete product</a></button></li>
            </ul>
        </div>
    </div>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
