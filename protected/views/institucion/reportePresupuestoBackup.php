<?php
	$ejercicioFiscal = EjercicioFiscal::model()->find('estatus_did=1');
	$modelDonativo = IngresoPorDonativo::model()->find('institucion_aid = :inst && ejercicioFiscal_did = :ej',array(':inst' => $_GET['id'],':ej' => $ejercicioFiscal->id));
	$this->pageCaption=$modelDonativo->institucion->nombre;
	$modelCuotasDeRecuperacion = IngresoPorCuotasdeRecuperacion::model()->find('institucion_aid = :inst && ejercicioFiscal_did = :ej',
		array(':inst' => $_GET['id'],':ej' => $ejercicioFiscal->id));
	$modelEvento = IngresoPorEvento::model()->find('institucion_aid = :inst && ejercicioFiscal_did = :ej',array(':inst' => $_GET['id'],':ej' => $ejercicioFiscal->id));
	$modelGastoDeAdministracion = GastoDeAdministracion::model()->find('institucion_aid = :inst && ejercicioFiscal_did = :ej',array(':inst' => $_GET['id'],':ej' => $ejercicioFiscal->id));
	$modelGastoOperativo = GastoOperativo::model()->find('institucion_aid = :inst && ejercicioFiscal_did = :ej',array(':inst' => $_GET['id'],':ej' => $ejercicioFiscal->id));
	$modelInversion = Inversion::model()->find('institucion_aid = :inst && ejercicio_did = :ej',array(':inst' => $_GET['id'],':ej' => $ejercicioFiscal->id));
	/*
	echo '<pre>'; print_r($modelDonativo->attributes); echo '</pre><br/>';
	echo '<pre>'; print_r($modelCuotasDeRecuperacion->attributes); echo '</pre><br/>';
	echo '<pre>'; print_r($modelEvento->attributes); echo '</pre><br/>';
	echo '<pre>'; print_r($modelGastoDeAdministracion->attributes); echo '</pre><br/>';
	echo '<pre>'; print_r($modelGastoOperativo->attributes); echo '</pre><br/>';
	*/

	function dineroFormato($numero) 
	{ 	    
    	return $numero; 	
	} 
?>
<div class="span7">
	<p style="text-align:left;"><b>Informe de Actividades <?php echo $ejercicioFiscal->nombre; ?></b></p>
	<h2 style="text-align:left;"><?php echo $modelDonativo->institucion->nombre; ?></h2>
	<br/>
	<table class="tableprint table-bordered">
		<caption  style="text-align:left;">				
				<h3>Ingresos</h3>
		</caption>
		<thead>		
			<tr>
				<th style="width:200px;">Donativos</th>
				<th style="width:200px;">Cantidad</th>
				<th style="width:150px;">Totales</th>
			</tr>
		</thead>		
		<tbody>
			<tr>
				<td >Personas Físicas</td>
				<td style="text-align:right;"><?php echo dineroFormato($modelDonativo->personaFisica); ?></td>
				<td ></td>
			</tr>
			<tr>
				<td>Personas Morales</td>
				<td style="text-align:right;"><?php echo dineroFormato($modelDonativo->personaMoral); ?></td>
				<td></td>
			</tr>
			<tr>
				<td>Fundaciones Nacionales</td>
				<td style="text-align:right;"><?php echo dineroFormato($modelDonativo->fundacionesNacionales); ?></td>
				<td></td>
			</tr>
			<tr>
				<td>Fundaciones Extranjeras</td>
				<td style="text-align:right;"><?php echo dineroFormato($modelDonativo->fundacionesExtrajeras); ?></td>
				<td></td>
			</tr>
			<tr>
				<td>Fondos Gubernamentales Municipal</td>
				<td style="text-align:right;"><?php echo dineroFormato($modelDonativo->fondosGubernamentalesMunicipal); ?></td>
				<td></td>
			</tr>
			<tr>
				<td>Fondos Gubernamentales Estatal</td>
				<td style="text-align:right;"><?php echo dineroFormato($modelDonativo->fondosGubernamentalesEstatal); ?></td>
				<td></td>
			</tr>
			<tr>
				<td>Fondos Gubernamentales Federal</td>
				<td style="text-align:right;"><?php echo dineroFormato($modelDonativo->fondosGubernamentalesFederal); ?></td>
				<td></td>
			</tr>
			<tr>
				<td>Especie</td>
				<td style="text-align:right;"><?php echo dineroFormato($modelDonativo->especie); ?></td>
				<td></td>
			</tr>		
		</tbody>
		<tfoot>
			<tr>
				<td><b>Total Donativos</b></td>
				<td></td>
				<td style="text-align:right;">
					<b>
						<?php $totalDonativo = $modelDonativo->personaFisica + 
								$modelDonativo->personaMoral + 
								$modelDonativo->fundacionesNacionales + 
								$modelDonativo->fundacionesExtrajeras +  
								$modelDonativo->fondosGubernamentalesMunicipal +
								$modelDonativo->fondosGubernamentalesEstatal +
								$modelDonativo->fondosGubernamentalesFederal +
								$modelDonativo->especie;
						echo dineroFormato($totalDonativo);
						?>
					</b>
				</td>
			</tr>
			<tr>
				<td></td>
				<td style="text-align:right;"><b>Total Cuotas de Recuperación</b></td>
				<td style="text-align:right;"><b><?php $totalCuotas = $modelCuotasDeRecuperacion->consultas;
						echo dineroFormato($totalCuotas);
					?></b></td>
			</tr>
			<tr>
				<td></td>
				<td style="text-align:right;"><b>Total Colectas, Eventos, Rifas.</b></td>
				<td style="text-align:right;"><b><?php $totalEvento = $modelEvento->colectas + 
								$modelEvento->eventos + 
								$modelEvento->rifas + 
								$modelEvento->conferencias;
						echo dineroFormato($totalEvento);
					?></b></td>
			</tr>
			<tr>
				<td></td>
				<td style="text-align:right;"><h3>Total de Ingresos</h3></td>
				<td style="text-align:right;">
					<h3>
						<?php $totalIngresos = $totalCuotas + $totalDonativo + $totalEvento;
							echo dineroFormato($totalIngresos);
						 ?>
					</h3>
				</td>
			</tr>
		</tfoot>
	</table>
</div>
<hl/>
<div class="span7">
	<table class="tableprint table-bordered">
		<caption  style="text-align:left;">
			<h3>Egresos</h3>
		</caption>
		<thead>		
			<tr>
				<th style="width:200px;">Tipos de Gastos</th>
				<th style="width:200px;">Cantidad</th>
				<th style="width:150px;">Totales</th>
			</tr>
		</thead>		
		<tbody>			
			<tr>
				<td>Gastos Asistenciales/Operativos</td>
				<td style="text-align:right;">
					<?php
						$totalGastoOperativo = $modelGastoOperativo->sueldos + 
												$modelGastoOperativo->honorarios +
												$modelGastoOperativo->combustibles +
												$modelGastoOperativo->luzTelefono +
												$modelGastoOperativo->papeleria +
												$modelGastoOperativo->renta +
												$modelGastoOperativo->impuestosDerechos +
												$modelGastoOperativo->otros;
						echo dineroFormato($totalGastoOperativo); 
					?>
				</td>
				<td></td>
			</tr>			
			<tr>
				<td >Gastos de Administración</td>
				<td style="text-align:right;">
					<?php 
						$totalGastoAdministracion = $modelGastoDeAdministracion->sueldos + 
												$modelGastoDeAdministracion->honorarios +
												$modelGastoDeAdministracion->combustibles +
												$modelGastoDeAdministracion->luzTelefono +
												$modelGastoDeAdministracion->papeleria +
												$modelGastoDeAdministracion->impuestosDerechos +
												$modelGastoDeAdministracion->otros;
						echo dineroFormato($totalGastoAdministracion); 
					?>
				</td>
				<td></td>
			</tr>
		</tbody>
		<tfoot>
			<tr>
				<td></td>
				<td style="width:200px; text-align:right;"><h3>Total de Egresos</h3></td>
				<td style="text-align:right;"><h3>
						<b>
							<?php $totalEgresos = $totalGastoOperativo + $totalGastoAdministracion;
								echo dineroFormato($totalEgresos);
							?>
						</b>
					</h3>
				</td>
			</tr>	
			<tr>
			<td style="width:180px;"></td>
			<td style="width:200px; text-align:right;">
				<h3>Remanente</h3>
			</td>
			<td style="text-align:right;">
				<h3>
					<b>
						<?php $remanente = $totalIngresos - $totalEgresos;
							if($remanente<0)
							{									
								echo '<span style="color:red;">' . dineroFormato($remanente) . '</span>';
							}
							else
								echo '<span style="color:green;">' . dineroFormato($remanente) . '</span>';
							
						?>
					</b>
				</h3>
			</td>
		</tr>			
		</tfoot>
	</table>
</div>


<div class="span7">
	<table class="tableprint table-bordered">
		<caption style="text-align:left;">
				<h3>Inversiones</h3>
		</caption>
		<thead>		
			<tr>
				<th style="width:200px;">Inversiones</th>
				<th style="width:200px;">Cantidad</th>
				<th style="width:150px;">Totales</th>
			</tr>
		</thead>		
		<tbody>
			<tr>
				<td >Terrenos</td>
				<td style="text-align:right"> <?php echo dineroFormato($modelInversion->terrenos); ?>	</td>
				<td></td>
			</tr>
			<tr>
				<td>Inmuebles</td>
				<td style="text-align:right"><?php echo dineroFormato($modelInversion->inmuebles); ?></td>
				<td></td>
			</tr>
			<tr>
				<td>Equipo de Oficina</td>
				<td style="text-align:right"><?php echo dineroFormato($modelInversion->equipoOficina); ?></td>
				<td></td>
			</tr>			
			<tr>
				<td >Vehículos Servicio Asistencial</td>
				<td style="text-align:right"> <?php echo dineroFormato($modelInversion->vehiculosServicio); ?>	</td>
				<td></td>
			</tr>
			<tr>
				<td >Vehículos Administrativos</td>
				<td style="text-align:right"> <?php echo $modelInversion->vehiculosAdministrativos; ?>	</td>
				<td></td>
			</tr>
			<tr>
				<td >Otros</td>
				<td style="text-align:right"> <?php echo dineroFormato($modelInversion->otros); ?>	</td>
				<td></td>
			</tr>
		</tbody>
		<tfoot>
			<tr>
				<td></td>
				<td style="text-align:right;"><h3>Total de Inversión</h3></td>
				<td style="text-align:right;">
					<h3>
						<b>
							<?php $totalInversion = $modelInversion->terrenos + 
													$modelInversion->inmuebles +
													$modelInversion->equipoOficina +
													$modelInversion->vehiculosServicio +
													$modelInversion->vehiculosAdministrativos +
													$modelInversion->otros;
								echo dineroFormato($totalInversion);
							?>
						</b>
					</h3>
				</td>
			</tr>			
		</tfoot>
	</table>
	<?php echo CHtml::button('Volver', array('submit' => array('institucion/acciones'),'class'=>'btn btn-primary')); ?>
</div>
