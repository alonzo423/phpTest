$(document).ready(function(){
  $("#btnEntrar").click(function(){
  	if(!validaCampoVacio($("#inputEmail").val())){
  		return false;
  	}
  	if(!validarEmail($("#inputEmail").val())){
  		return false;
  	}
  	if(!validaCampoVacio($("#inputPassword").val())){
  		return false;
  	}
    
  	$("#formLogin").submit();
  })
})