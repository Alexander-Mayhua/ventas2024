/** */
async function listar_compras() {
    try {
        let respuestas = await fetch(base_url + 'controller/compras.php?tipo=listar');
      json = await respuestas.json();
        if (json.status) {
            let datos = json.contenido;
            let cont = 0;
            datos.forEach(item => {
                let nueva_fila = document.createElement("tr");

                nueva_fila.id = "fila"+item.id;
                cont +=1;
                nueva_fila.innerHTML = `
                 <th>${cont}</th>
                 <td>${item.producto.nombre}</td>
                  <td>${item.cantidad}</td>
                  <td>${item.precio}</td>
                  <td>${item.fecha_compra}</td>
                  <td>${item.trabajador.razon_social}</td>
                    <td>${item.opciones}</td>
                 `;
                document.querySelector('#tbl_compra').appendChild(nueva_fila);
            });

        }

        console.log(json);
    } catch (error) {
        console.log("ooosp salio un error" + error);
    }
}
if (document.querySelector('#tbl_compra')) {
    listar_compras();
}





async function registrar_compra() {
    let producto = document.getElementById('producto').value;
    let cantidad = document.querySelector('#cantidad').value;
    let precio = document.querySelector('#precio').value;
    let fecha_compra = document.querySelector('#fecha_compra').value;
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

/*listar producto */
async function listar_producto() {
    try{
        let respuesta= await fetch(base_url+'controller/Producto.php?tipo=listar');
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

//ver compra poara editar//
async function ver_compra(id) {
    const formData = new FormData();
    formData.append('id_compra', id);
    try {
        let respuesta = await fetch(base_url + 'controller/compras.php?tipo=ver', {
            method: 'POST',
            mode: 'cors',
            cache: 'no-cache',
            body: formData
        });

        json = await respuesta.json();
        if (json.status) {
            document.querySelector('#producto').value = json.contenido.id_producto;
            document.querySelector('#cantidad').value = json.contenido.cantidad;
            document.querySelector('#precio').value = json.contenido.precio;
            document.querySelector('#fecha_compra').value = json.contenido.fecha_compra;
            document.querySelector('#trabajador').value = json.contenido.id_trabajador;
        

        } else {
            window.location = base_url + "compras";
        }

        console.log(json);
    } catch (error) {
        console.log("ooops ocurrio u error" + error);
    }




}