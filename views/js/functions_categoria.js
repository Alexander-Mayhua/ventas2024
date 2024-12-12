/* */
async function listar_categorias() {
    try {
        let respuestas = await fetch(base_url + 'controller/categoria.php?tipo=listar');
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
                 <td>${item.nombre}</td>
                  <td>${item.detalle}</td>
                 <td>${item.opciones}</td>
                 
                  <td></td>
                 `;
                document.querySelector('#tbl_categoria').appendChild(nueva_fila);
            });

        }

        console.log(json);
    } catch (error) {
        console.log("ooosp salio un error" + error);
    }
}
if (document.querySelector('#tbl_categoria')) {
    listar_categorias();
}





async function registrar_categoria() {
    let nombre = document.getElementById('nombre').value;
    let detalle = document.querySelector('#detalle').value;


    if (nombre == "" || detalle == "") {
        alert("error, campos vacios");
        return;

    }
    try {
        //capturamos los datos de formulario html
        const datos = new FormData(frmRegistrar);
        //enviar los datos hacia el controlador
        let respuesta = await fetch(base_url + 'controller/categoria.php?tipo=registrar', {
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

//ver categoria poara editar//
async function ver_categoria(id) {
    const formData = new FormData();
    formData.append('id_categoria', id);
    try {
        let respuesta = await fetch(base_url + 'controller/categoria.php?tipo=ver', {
            method: 'POST',
            mode: 'cors',
            cache: 'no-cache',
            body: formData
        });


        json = await respuesta.json();
        if (json.status) {
            document.querySelector('#id_categoria').value = json.contenido.id;
            document.querySelector('#nombre').value = json.contenido.nombre;
            document.querySelector('#detalle').value = json.contenido.detalle;

        } else {
            window.location = base_url + "categoria";
        }


        console.log(json);
    } catch (error) {
        console.log("ooops ocurrio u error" + error);
    }
}



async function actualizar_categoria() {
    const datos = new FormData(frmActualizar);
    try {
        let respuesta = await fetch(base_url + 'controller/categoria.php?tipo=actualizar', {
            method: 'POST',
            mode: 'cors',
            cache: 'no-cache',
            body: datos
        });
        json = await respuesta.json();
        if (json.status) {
            swal("Actualizar", json.mensaje, "success");
        } else {
            swal("Actualizar", json.mensaje, "error");
        }
        console.log(json);
    } catch (e) {

    }
}




//elmnar categoria

async function eliminar_categoria(id) {
    swal({
        title: "Realmente desea eliminar el categoria?",
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
    // alert("categoria elminado: id=" + id);

    const formData = new FormData();
    formData.append('id_categoria', id);
    try {
        let respuesta = await fetch(base_url + 'controller/categoria.php?tipo=eliminar', {
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
            swal("eliminar", "Error al eliminar  categoria", "warning");
        }
    } catch (e) {
        console.log("ocurrio un error" + e);
    }
}