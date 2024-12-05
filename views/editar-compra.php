<div class="container form-nproduct">
<form action="" id="frmRegistrar" style="margin: 25px">
<div>
        <label for=""> producto: </label>
             <select name="producto" id="producto" class="form-control" require >
                <option>Seleccione</option>
             </select>
            
    </div>
    <div>
        <label for=""> cantidad: </label>
            <input type="number" id="cantidad" name="cantidad" class="form-control" >
    </div>
    <div>
        <label for=""> precio: </label>
            <input type="decimal" id="precio" name="precio"  class="form-control" >
    </div>
    <div>
        <label for=""> fecha_compra:</label>
            <input type="date" id="fecha_compra" name="fecha_compra" class="form-control" >
    </div>
    <label for=""> trabajador: </label>
             <select name="trabajador" id="trabajador" class="form-control" require >
                <option>Seleccione</option>
             </select>
            
    </div>
 
    <br>
    <button type="button" class="btn btn-success" onclick="registrar_compra();" >registrar</button>
    </div>
</form>
<script src="<?php echo BASE_URL;?>views/js/functions_compra.js"></script>
<script>listar_producto();</script>
<script>listar_trabajador();</script>

<script>
const id_p=<?php $pagina=explode("/", $_GET['views']); echo $pagina['1'];?>;
 ver_compra(id_p);
</script>