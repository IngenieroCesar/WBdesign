  //------Formulario---------------//
  (function(){
    var formulario = document.formulario_registro,
        elementos = formulario.elements;


    // Functions
    var validarInputs = function() {
     for (var i = 0; i < elementos.length; i++) {
       if (elementos[i].type == "text" || elementos[i].type == "number" || elementos[i].type == "email" || elementos[i].type == "password") {
         if (elementos[i].value.length == 0) {
           console.log('El campo ' + elementos[i].name + ' esta incompleto');
           elementos[i].className = elementos[i].className + " error";
           return false;
         } else {
           elementos[i].className = elementos[i].className.replace(" error", "");
         }
       }
     }
    };

    var enviar = function(e) {
      if (!validarInputs()) {
        console.log('Falto validar los Input');
        e.preventDefault();
      } else if (!validarRadios()) {
        console.log('Falto validar los Radio Button');
        e.preventDefault();
      } else if (!validarCheckbox()) {
        console.log('Falto validar Checkbox');
        e.preventDefault();
      } else {
        console.log('Envia');
        e.preventDefault();
      }
    };
    // Funciones Blur y focus
    var focusInput = function() {
  this.parentElement.children[1].className = "label active";

};

var blurInput = function() {
  if (this.value <= 0) {
    this.parentElement.children[1].className = "label";

  }
};
    // Eventos
   
    for (var i = 0; i < elementos.length; i++) {
        if (elementos[i].type == "text" || elementos[i].type == "number" || elementos[i].type == "email" || elementos[i].type == "password") {
          elementos[i].addEventListener("focus", focusInput);
          elementos[i].addEventListener("blur", blurInput);
        }
    }
  }())
