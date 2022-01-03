$(document).ready(function(){

  
  var promise = $.get('assets/php/controller/getVehiculos.php');

  promise.done(function(data) {
    $("#sectionContainer").html(data);
  });
  promise.fail(function() {
    $('#sectionContainer').append('Lo sentimos ha ocurrido un error');
  });




  $("#vinculoVer").on({
		click: function() {
		   $("#sectionContainer").load('assets/php/controller/getVehiculos.php');
		}
	});

	$("#vinculoInsertar").on({
		click: function() {
		   $("#sectionContainer").load('assets/php/controller/insertVehiculo.php');
		}
	});
})


function insertVehiculo(){
	if($("#selectTipoVehiculo").val() == 0){
          alert("Seleccione el tipo de vehiculo");
          $(this).focus();
          return false;
       }

       if(!validaCampoVacio($("#inputNumeroLlantas").val())){
        alert("Este campo es obigatorio");
        $("#inputNumeroLlantas").focus();
        return false;
       }

       if(!validaCampoVacio($("#inputPotenciaMotor").val())){
        alert("Este campo es obigatorio");
        $("#inputPotenciaMotor").focus();
        return false;
       }

       if($("#inputNumeroLlantas").val() == 0){
        alert("Este campo es debe ser mayor a 0");
        $("#inputNumeroLlantas").focus();
        return false;
       }

       if($("#inputPotenciaMotor").val() == 0){
        alert("Este campo es debe ser mayor a 0");
        $("#inputPotenciaMotor").focus();
        return false;
       }

       if(confirm("¿Deseas hacer el registro?")){
          $.ajax({
            url:'assets/php/controller/createVehiculo.php',
            type:'POST',
            data:$("#formRegistro").serialize(),
            success:function(data){
              var jData = eval(data);
              for(var i in jData){
                alert(jData[i].leyenda);
              }
              $("#formRegistro")[0].reset()
            }

          })
       }
}