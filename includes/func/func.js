//Validacion formulario JS

  function validarFormulario(evento) {
    evento.preventDefault();
    var nombre = document.getElementById('Nombre').value;
    if(nombre.length == 0) {
      alert('Por favor decinos tu nombre');
      return;
    }
    var apellido = document.getElementById('apellido').value;
    if(apellido.length == 0) {
      alert('Por favor decinos tu apellido');
      return;
    }
    var email = document.getElementById('email').value;
    
    if(email.length == 0) {
      alert('Por favor completa tu email para poder contactarte');
      return;
    }
    var asunto = document.getElementById('Asunto').value;
    if(asunto.length == 0) {
      alert('Cual es tu duda o consulta?');
      return;
    
    }
      if (document.formcontacto.Area.selectedIndex==0){
        alert("Selecciona un sector")
        document.formcontacto.Area.focus()
        return 0;
 

}this.submit();


  }


//Ventana modal suscripcion newsletter

if (document.getElementById("modal")) {
    var modal = document.getElementById("tvesModal");
    var btn = document.getElementById("modal");
    var span = document.getElementsByClassName("close")[0];
    var body = document.getElementsByTagName("body")[0];


   


    btn.onclick = function(evento) {

      var mail = document.getElementById('email').value;
      if(mail.length == 0) {
        alert('Por favor dejanos tu mail');
        evento.preventDefault();
      }else {
        evento.preventDefault();
        modal.style.display = "block";

        body.style.position = "static";
        body.style.height = "100%";
        body.style.overflow = "hidden";
    }

    cerrar.onclick = function() {
        modal.style.display = "none";
        
        body.style.position = "inherit";
        body.style.height = "auto";
        body.style.overflow = "visible";
    }
  }
   
}

