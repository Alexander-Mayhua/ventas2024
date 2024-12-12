/* */
async function listar_productos() {
    try {
        let respuestas = await fetch(base_url + 'controller/Producto.php?tipo=listar');
        json = await respuestas.json();
        if (json.status) {
            let datos = json.contenido;
            let cont = 0;
            datos.forEach(item => {
                let nueva_fila = document.createElement("tr");

                nueva_fila.id = "fila" + item.id;
                cont += 1;
                nueva_fila.innerHTML = `
                 <th>${cont}</th>
                 <td>${item.codigo}</td>
                  <td>${item.nombre}</td>
                  <td>${item.stock}</td>
                  <td>${item.categoria.nombre}</td>
                  <td>${item.proveedor.razon_social}</td>
                  <td>${item.opciones}</td>
                 `;
                document.querySelector('#tbl_producto').appendChild(nueva_fila);
            });

        }

        console.log(json);
    } catch (error) {
        console.log("ooosp salio un error" + error);
    }
}
if (document.querySelector('#tbl_producto')) {
    listar_productos();
}





async function registrar_producto() {
    let codigo = document.getElementById('codigo').value;
    let nombre = document.querySelector('#nombre').value;
    let detalle = document.querySelector('#detalle').value;
    let precio = document.querySelector('#precio').value;
    let stock = document.querySelector('#stock').value;
    let categoria = document.querySelector('#categoria').value;
    let imagen = document.querySelector('#imagen').value;
    let proveedor = document.querySelector('#proveedor').value;

    if (codigo == "" || nombre == "" || detalle == "" || precio == "" || stock == "" || categoria == "" || imagen == "" || proveedor == "") {
        alert("error, campos vacios");
        return;

    }
    try {
        //capturamos los datos de formulario html
        const datos = new FormData(frmRegistrar);
        //enviar los datos hacia el controlador
        let respuesta = await fetch(base_url + 'controller/Producto.php?tipo=registrar', {
            method: 'POST',
            mode: 'cors',
            cache: 'no-cache',
            body: datos

        });
        json = await respuesta.json();
        if (json.status) {
            swal("Registro", json.mensaje, "success");
        } else {
            swal("Registro", json.mensaje, "error");
        }


        console.log(json);
    } catch (e) {
        console.log("ooops ocurrio un error " + e);
    }
}


/*listar categoria */

async function listar_categoria() {
    try {
        let respuesta = await fetch(base_url + 'controller/categoria.php?tipo=listar');
        json = await respuesta.json();
        if (json.status) {
            let datos = json.contenido;
            // de otra manera 
            /*let contenido_select ='<option value=">Selecione</option>';
            datos.forEach(element=>{
              contenido_select +='<option value"'+element.id + '">'+ element.nombre+ '<option>'; */
            datos.forEach(element => {

                $('#categoria').append($('<option />', {
                    text: `${element.nombre}`,
                    value: ` ${element.id}`
                }));
            });
            //document.getElementtByid('categoria').innerHTML=contenido_select;

        }

        console.log(respuesta);

    } catch (e) {
        console.log("error al cargar categorias" + e);
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

//ver producto poara editar//
async function ver_producto(id) {
    const formData = new FormData();
    formData.append('id_producto', id);
    try {
        let respuesta = await fetch(base_url + 'controller/Producto.php?tipo=ver', {
            method: 'POST',
            mode: 'cors',
            cache: 'no-cache',
            body: formData
        });

        json = await respuesta.json();
        if (json.status) {
            document.querySelector('#id_producto').value = json.contenido.id;
            document.querySelector('#codigo').value = json.contenido.codigo;
            document.querySelector('#nombre').value = json.contenido.nombre;
            document.querySelector('#precio').value = json.contenido.precio;
            document.querySelector('#categoria').value = json.contenido.id_categoria;
            document.querySelector('#proveedor').value = json.contenido.id_proveedor;
            document.querySelector('#img').value = json.contenido.imagen;

        } else {
            window.location = base_url + "productos";
        }

        console.log(json);
    } catch (error) {
        console.log("ooops ocurrio u error" + error);
    }
}


async function actualizar_producto() {
    const datos = new FormData(frmActualizar);
    try {
        let respuesta = await fetch(base_url + 'controller/Producto.php?tipo=actualizar', {
            method: 'POST',
            mode: 'cors',
            cache: 'no-cache',
            body: datos
        });
        json = await respuesta.json();
        console.log(json);
    } catch (e) {

    }
}



async function eliminar_producto(id) {
    swal({
        title: "Realmente desea eliminar el producto?",
        text: "",
        icon: "warning",
        buttons: true,
        dangerMode: true

    }).then((willDelete) => {
        if (willDelete) {
            fnt_eliminar(id);
        }
    })
}

async function fnt_eliminar(id) {
    // alert("producto elminado: id=" + id);

    const formData = new FormData();
    formData.append('id_producto', id);
    try {
        let respuesta = await fetch(base_url + 'controller/Producto.php?tipo=eliminar', {
            method: 'POST',
            mode: 'cors',
            cache: 'no-cache',
            body: formData
        });
        json = await respuesta.json();
        if (json.status) {
            //  alert("eliminado correctamente");
            swal("eliminar", "eliminado correctamente", "success");
            document.querySelector('#fila' + id).remove();
        } else {
          //  alert("error al eliminar");
          swal("Eliminar", json.message || "No se puede eliminar el producto porque está relacionado con otra tabla.", "warning");
        }
    } catch (e) {
        console.log("ocurrio un error" + e);
    }
}