
async function registrar_producto() {
    let codigo = document.getElementById('codigo').value;
    let nombre = document.querySelector('#nombre').value;
    let detalle = document.querySelector('#detalle').value;
    let precio = document.querySelector('#precio').value;
    let stock = document.querySelector('#stock').value;
    let categoria = document.querySelector('#categoria').value;
    let imagen = document.querySelector('#imagen').value;
    let proveedor = document.querySelector('#proveedor').value;

   if (codigo==""|| nombre=="" || detalle=="" || precio==""|| stock=="" || categoria==""|| imagen==""|| proveedor=="" ) {
    alert ("error, campos vacios");
    return;

   }
   try {
    //capturamos los datos de formulario html
    const datos=new FormData(frmRegistrar);
    //enviar los datos hacia el controlador
    let respuesta = await fetch(base_url+'controller/Producto.php?tipo=registrar',{
        method: 'POST',
        mode: 'cors',
        cache: 'no-cache',
        body:datos

    });
    json = await respuesta.json();
    if(json.status){
        swal("Registro",json.mensaje,"success");
    }else{
        swal("Registro",json.mensaje,"error");
    }
        

    console.log(json);
   } catch (e) {
    console.log("ooops ocurrio un error "+e);
   }
}


/*listar categoria */

async function listar_categoria() {
    try{
        let respuesta= await fetch(base_url+'controller/categoria.php?tipo=listar');
        json = await respuesta.json();
        if (json.status){
            let datos = json.contenido;
              // de otra manera 
              /*let contenido_select ='<option value=">Selecione</option>';
              datos.forEach(element=>{
                contenido_select +='<option value"'+element.id + '">'+ element.nombre+ '<option>'; */
            datos.forEach(element => {

                $('#categoria').append($('<option />',{
                    text:`${element.nombre}`,
                    value:` ${element.id}`
                }));
            });
            //document.getElementtByid('categoria').innerHTML=contenido_select;

        }
      
        console.log(respuesta);

    }catch(e){
        console.log("error al cargar categorias"+e);
    }
}

// listar proveedor

async function listar_proveedor() {
    try {
        let respuesta = await fetch(base_url + 'controller/proveedor.php?tipo=listar');
        let json = await respuesta.json();
        if (json.status) {
            let datos = json.contenido;
            datos.forEach(element => {
                $('#proveedor').append($('<option />', {
                    text: `${element.razon_social}`,
                    value: `${element.id}`
                }));
            });
        }

        console.log(respuesta);

    } catch (e) {
        console.log("Error al cargar proveedores: " + e);
    }
}