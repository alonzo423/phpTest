<style>


</style>
<form id="formRegistro">
  <div class="form-group">
    <label for="exampleFormControlSelect1">Tipo Vehiculo</label>
    <select class="form-control" id="selectTipoVehiculo" name="selectTipoVehiculo">
      <option value="0">Seleccione Tipo</option>
      <?php 
      foreach($llamada[0]->data as $valor){
        ?>
        <option value="<?php echo $valor->idTipoVehiculo; ?>"><?php echo $valor->tipoVehiculo; ?></option>
        <?php
      }
      ?>
      
    </select>
  </div>
  <div class="form-group">
    <label for="inputNumeroLlantas">Numero Llantas</label>
    <input type="text" class="form-control" id="inputNumeroLlantas" name="inputNumeroLlantas" aria-describedby="numeroLlantasHelp" placeholder="Numero de Llantas">
    
  </div>
  <div class="form-group">
    <label for="inputPotenciaMotor">Potencia Motor</label>
    <input type="text" class="form-control" id="inputPotenciaMotor" name="inputPotenciaMotor" aria-describedby="potenciaMotorHelp" placeholder="Potencia Motor">
    
  </div>
  
  <button id="btnRegistrar" type="button" class="btn btn-primary">Registrar</button>
  <button type="reset" class="btn btn-primary">Limpiar</button>
</form>

<script>
  $(document).ready(function(){
    $("#btnRegistrar").on({
      click: function() {
        insertVehiculo();       
     }
   });
  })
</script>