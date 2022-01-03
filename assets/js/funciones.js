  function validaCampoVacio(elemento){
    if(elemento == ''){
      return false;
    }else{
      return true;
    }
  }

  function validarEmail(elemento){
    var texto = elemento;
    var regex = /^[-\w.%+]{1,64}@(?:[A-Z0-9-]{1,63}\.){1,125}[A-Z]{2,63}$/i;
    if (!regex.test(texto)) {
      return false;
    } else {
      return true;
    }
  }