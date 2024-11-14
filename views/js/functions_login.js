async function iniciar_sesion() {
    console.log('iniciar_sesion prueba');
}
if(document.querySelector('#frm_iniciar_sesion')){
    let frm_iniciar_sesion =document.querySelector
 ('#frm_iniciar_sesion');
 frm_iniciar_sesion.onsubmit =function(e){
    e.preventDefault();
    iniciar_sesion();
 }
}