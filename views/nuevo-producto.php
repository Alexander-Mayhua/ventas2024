<div class="container form-nproduct">
<form action="" id="frmRegistrar" style="margin: 25px">
    <div>
        <label for=""> codigo: </label>
            <input type="number" id="codigo" name="codigo" class="form-control" >
    </div>
    <div>
        <label for=""> nombre: </label>
            <input type="text" id="nombre" name="nombre" class="form-control" >
    </div>
    <div>
        <label for=""> detalle: </label>
            <input type="text" id="detalle" name="detalle"  class="form-control" >
    </div>
    <div>
        <label for=""> precio:</label>
            <input type="number" id="precio" name="precio" class="form-control" >
    </div>
    <div>
        <label for=""> stock:</label>
            <input type="number" id="stock" name="stock" class="form-control" >
    </div>
    <div>
        <label for=""> categoria: </label>
            <input type="number" id="categoria" name="categoria"  class="form-control">
    </div>
    <div>
        <label for=""> imagen: </label>
            <input type="text"id="imagen" name="imagen" class="form-control" >
    </div><div>
        <label for=""> proveedor:</label>
            <input type="number" id="proveedor" name="proveedor" class="form-control" >
    </div>
    <br>
    <button type="button" class="btn btn-success" onclick="registrar_producto();" >registrar</button>
    </div>
</form>
<script src="<?php echo BASE_URL;?>views/js/functions_producto.js"></script>
