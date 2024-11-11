
async function registrar_compra() {
    let producto = document.getElementById('producto').value;
    let cantidad = document.querySelector('#cantidad').value;
    let precio = document.querySelector('#precio').value;
    let fecha_compra = document.querySelector('#fecha-compra').value;
    let trabajador = document.querySelector('#trabajador').value;
   

   if (producto==""|| cantidad=="" || precio=="" || fecha_compra==""|| trabajador==""  ) {
    alert ("error, campos vacios");
    return;

   }
   try {
    //capturamos los datos de formulario html
    const datos=new FormData(frmRegistrar);
    //enviar los datos hacia el controlador
    let respuesta = await fetch(base_url+'controller/compras.php?tipo=registrar',{
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

async function listar_producto() {
    try{
        let respuesta= await fetch(base_url+'controller/productoListar.php?tipo=listar');
        json = await respuesta.json();
        if (json.status){
            let datos = json.contenido;
              // de otra manera 
              /*let contenido_select ='<option value=">Selecione</option>';
              datos.forEach(element=>{
                contenido_select +='<option value"'+element.id + '">'+ element.nombre+ '<option>'; */
            datos.forEach(element => {

                $('#producto').append($('<option />',{
                    text:`${element.nombre}`,
                    value:` ${element.id}`
                }));
            });
            //document.getElementtByid('categoria').innerHTML=contenido_select;

        }
      
        console.log(respuesta);

    }catch(e){
        console.log("error al cargar producto"+e);
    }
}

// listar proveedor

async function listar_trabajador() {
    try {
        let respuesta = await fetch(base_url + 'controller/trabajador.php?tipo=listar');
        let json = await respuesta.json();
        if (json.status) {
            let datos = json.contenido;
            datos.forEach(element => {
                $('#trabajador').append($('<option />', {
                    text: `${element.razon_social}`,
                    value: `${element.id}`
                }));
            });
        }

        console.log(respuesta);

    } catch (e) {
        console.log("Error al cargar trabajador: " + e);
    }
}