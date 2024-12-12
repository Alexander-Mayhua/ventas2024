<div class="container form-nproduct">
<form action="" id="frmActualizar" style="margin: 25px">
<input type="hidden" name="id_categoria" id="id_categoria">
    <div>
        <label for=""> nombre: </label>
            <input type="text" id="nombre" name="nombre" class="form-control" >
    </div>
    <div>
        <label for=""> detalle: </label>
            <input type="text" id="detalle" name="detalle" class="form-control" >
    </div>
    
    <br>
    <button type="button" class="btn btn-success" onclick="actualizar_categoria();">actualizar</button>
    </div>
</form>
<script src="<?php echo BASE_URL;?>views/js/functions_categoria.js"></script>
<!--<script>listar_categoria();</script>
<script>listar_proveedor();</script>-->
<script>
const id_p=<?php $pagina=explode("/", $_GET['views']); echo $pagina['1'];?>;
ver_categoria(id_p);
</script>