/* */
async function listar_persona() {
    try {
        let respuestas = await fetch(base_url + 'controller/persona.php?tipo=listar');
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
                 <td>${item.nro_identidad}</td>
                  <td>${item.razon_social}</td>
                  <td>${item.telefono}</td>
                  <td>${item.correo}</td>
                  <td>${item.departamento}</td>
                  <td>${item.provincia}</td>
                  <td>${item.distrito}</td>
                   <td>${item.codigo_postal}</td>
                   <td>${item.direccion}</td>
                   <td>${item.rol}</td>
                    <td>${item.opciones}</td>
                  <td></td>
                 `;
                document.querySelector('#tbl_persona').appendChild(nueva_fila);
            });

        }

        console.log(json);
    } catch (error) {
        console.log("ooosp salio un error" + error);
    }
}
if (document.querySelector('#tbl_persona')) {
    listar_persona();
}


async function registrar_persona() {
    let nro_identidad = document.getElementById('nro_identidad').value;
    let razon_social = document.querySelector('#razon_social').value;
    let telefono = document.querySelector('#telefono').value;
    let correo = document.querySelector('#correo').value;
    let departamento = document.querySelector('#departamento').value;
    let provincia = document.querySelector('#provincia').value;
    let distrito = document.querySelector('#distrito').value;
    let codigo_postal = document.querySelector('#codigo_postal').value;
    let direccion = document.querySelector('#direccion').value;
    let rol = document.querySelector('#rol').value;
    let password = document.querySelector('#password').value;
    let estado = document.querySelector('#estado').value;
    let fecha_registro = document.querySelector('#fecha_registro').value;

   if (nro_identidad==""|| razon_social=="" || telefono=="" || telefono==""|| correo=="" || departamento==""|| provincia==""|| distrito==""  || codigo_postal==""|| direccion==""|| rol==""|| password==""|| estado==""|| fecha_registro=="") {
    alert ("error, campos vacios");
    return;

   }
   try {
    //capturamos los datos de formulario html
    const datos=new FormData(frmRegistrar);
    //enviar los datos hacia el controlador
    let respuesta = await fetch(base_url + 'controller/persona.php?tipo=registrar',{
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




//ver persona poara editar//
async function ver_persona(id) {
    const formData= new FormData();
    formData.append('id_persona', id);
    try {
      let respuesta= await fetch(base_url+'controller/persona.php?tipo=ver',{
         method: 'POST' ,
         mode:'cors',
         cache: 'no-cache',
         body: formData
      });  


      json= await respuesta.json();
if(json.status){
    document.querySelector('#nro_identidad').value= json.contenido.nro_identidad;
    document.querySelector('#razon_social').value= json.contenido.razon_social;
    document.querySelector('#telefono').value= json.contenido.telefono;
    document.querySelector('#correo').value= json.contenido.correo;
    document.querySelector('#departamento').value= json.contenido.departamento;
    document.querySelector('#provincia').value= json.contenido.provincia;
    document.querySelector('#distrito').value= json.contenido.distrito;
    document.querySelector('#codigo_postal').value= json.contenido.codigo_postal;
    document.querySelector('#direccion').value= json.contenido.direccion;
    document.querySelector('#rol').value= json.contenido.rol;
    document.querySelector('#estado').value= json.contenido.estado;
    document.querySelector('#fecha_registro').value= json.contenido.fecha_registro;
}else{
    window.location= base_url+"persona";
}


      console.log(json);
    } catch (error) {
        console.log("ooops ocurrio u error"+error);
    }
}
