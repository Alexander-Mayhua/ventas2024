<div class="container form-nproduct">
<form action="" id="frmRegistrar" style="margin: 25px">
    <div>
        <label for=""> nro_identidad: </label>
            <input type="text" id="nro_identidad" name="nro_identidad" class="form-control" >
    </div>
    <div>
        <label for=""> razon_social: </label>
            <input type="text" id="razon_social" name="razon_social" class="form-control" >
    </div>
    <div>
        <label for=""> telefono: </label>
            <input type="number" id="telefono" name="telefono"  class="form-control" >
    </div>
    <div>
        <label for=""> correo:</label>
            <input type="email" id="correo" name="correo" class="form-control" >
    </div>
    <div>
        <label for=""> departamento:</label>
            <input type="text" id="departamento" name="departamento" class="form-control" >
    </div>
    <div>
        <label for=""> provincia:</label>
            <input type="text" id="provincia" name="provincia" class="form-control" >
    </div>
    <div>
        <label for=""> distrito: </label>
            <input type="text"id="distrito" name="distrito" class="form-control" >
    </div>
    <div>
        <label for=""> codigo_postal: </label>
            <input type="number"id="codigo_postal" name="codigo_postal" class="form-control" >
    </div>
    <div>
        <label for=""> direccion: </label>
            <input type="text"id="direccion" name="direccion" class="form-control" >
    </div>
    <div>
        <label for=""> rol: </label>
            <input type="text"id="rol" name="rol" class="form-control" >
    </div>
    <div>
        <label for=""> password: </label>
            <input type="password"id="password" name="password" class="form-control" >
    </div>
    <div>
        <label for=""> estado: </label>
            <input type="text"id="estado" name="estado" class="form-control" >
    </div>
    <div>
        <label for=""> fecha_registro: </label>
            <input type="date"id="fecha_registro" name="fecha_registro" class="form-control" >
    </div>
    <br>
    <button type="button" class="btn btn-success" onclick="registrar_persona();" >registrar</button>
    </div>
</form>
<script src="<?php echo BASE_URL;?>views/js/functions_persona.js"></script>

<!--<script>listar_categoria();</script>
<script>listar_proveedor();</script>-->
<script>

const id_p=<?php $pagina=explode("/", $_GET['views']); echo $pagina['1']?>;
 ver_persona(id_p);
</script>