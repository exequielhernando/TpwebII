{include file="header.tpl"}
    <div class="container">  
        <h1>{$Product->name}ss</h1>
        <div id="tareas-container" class="container">
            <ul class="list-group">
                <li class="list-group-item">{$Product->description}</li>
                <li class="list-group-item">{$Product->price}</li>
                <li class="list-group-item">{$Product->stock}</li>
                <li class="list-group-item">{$Product->image}</li>
                <li class="list-group-item">{$Product->nameCategoria}</li>
                <li class="list-group-item"><button type="button" class="btn btn-success"><a href="editpruduct/{$Product->id_producto}">Edit product</a></button></li>
                <li class="list-group-item"><button type="button" class="btn btn-danger"><a href="deletepruduct/{$Product->id_producto}">Delete product</a></button></li>
            </ul>
        </div>
    </div>
{include file="footer.tpl"}
