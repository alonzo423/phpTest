<div class="row">
	<?php 
	if($llamada[0]->Codigo == 0){
		echo $llamada[0]->leyenda;
	}else{
		?>
		<table class="table table-striped table-bordered" id="data-table">
			<thead class="bg-success text-white">
				<tr>
					<th>Codigo</th>
					<th>Numero Llantas</th>
					<th>Potencia Motor</th>
					<th>Tipo Vehiculo</th>
					<th>Opciones</th>
				</tr>
			</thead>
			<tbody>
				<?php 
				foreach($llamada[0]->data as $valor){
					?>
					<tr id="1" class="gradeX">
						<td><?php echo $valor->idVehiculo; ?></td>
						<td><?php echo $valor->numeroLlantas; ?></td>
						<td><?php echo $valor->potenciaMotor; ?></td>
						<td><?php echo $valor->tipoVehiculo; ?></td>
						<td class="center">X</td>
					</tr>
					<?php
				}
				?>
			</tbody>
			<tfoot class="bg-success text-white">
				<tr>
					<th>Codigo</th>
					<th>Numero Llantas</th>
					<th>Potencia Motor</th>
					<th>Tipo Vehiculo</th>
					<th>Opciones</th>
				</tr>
			</tfoot>
		</table>
	<?php
	}
	?>
</div>