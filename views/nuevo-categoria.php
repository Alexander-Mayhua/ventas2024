<div class="container form-nproduct">
<form action="" id="frmRegistrar" style="margin: 25px">
    <div>
        <label for=""> nombre: </label>
            <input type="text" id="nombre" name="nombre" class="form-control" >
    </div>
    <div>
        <label for=""> detalle: </label>
            <input type="text" id="detalle" name="detalle" class="form-control" >
    </div>
    
    <br>
    <button type="button" class="btn btn-success" onclick="registrar_categoria();">registrar</button>
    </div>
</form>
<script src="<?php echo BASE_URL;?>views/js/functions_categoria.js"></script>
<!--<script>listar_categoria();</script>
<script>listar_proveedor();</script>-->