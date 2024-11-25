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

                nueva_fila.id = "fila"+item.id;
                cont +=1;
                nueva_fila.innerHTML = `
                 <th>${cont}</th>
                 <td>${item.nombre}</td>
                  <td>${item.detalle}</td>
                 
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
 

   if (nombre==""|| detalle=="" ) {
    alert ("error, campos vacios");
    return;

   }
   try {
    //capturamos los datos de formulario html
    const datos=new FormData(frmRegistrar);
    //enviar los datos hacia el controlador
    let respuesta = await fetch(base_url+'controller/categoria.php?tipo=registrar',{
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
