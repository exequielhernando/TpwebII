{include file="header.tpl"}
    <div class="container">  
        <h1>Lista de Productos</h1>
        <div id="tareas-container" class="container">
            <ul class="list-group">
                {foreach from=$Products item=product }
                echo 
                    <li class="list-group-item">{$product->name} --- <a href='product/{$product->id_producto}'>Ver mas</a></li>
                {/foreach}
            </ul>
        </div>
    </div>
{include file="footer.tpl"}
