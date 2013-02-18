<?php  
	
	$this->pageCaption='Informe de actividades';
	$this->pageTitle=Yii::app()->name . ' - ' . $this->pageCaption;
	$this->pageDescription='';
	$this->breadcrumbs=array(
		'Crear',
	);
	
	$this->menu=array(
		array('label'=>'Volver ', 'url'=>array('institucion/cuadrogeneral')),
		array('label'=>'Generar ', 'url'=>array('institucion/reporteinformedeactividades','institucion'=>$_GET['institucion'])),
	);
	//Asistencial
	$info = Informe::model()->find('institucion_aid = ' . $_GET['institucion']);
	//Ingresos
	$donativo = IngresoPorDonativo::model()->find('institucion_aid = ' . $_GET['institucion']);
	$cuotaRecuperacion = IngresoPorCuotasdeRecuperacion::model()->find('institucion_aid = ' . $_GET['institucion']);
	$evento = IngresoPorEvento::model()->find('institucion_aid = ' . $_GET['institucion']);
	$inversion = Inversion::model()->find('institucion_aid = ' . $_GET['institucion']);
	//gastos
	$gastosAdmon = GastoDeAdministracion::model()->find('institucion_aid = ' . $_GET['institucion']);
	$gastosOperativos = GastoOperativo::model()->find('institucion_aid = ' . $_GET['institucion']);
?>
<div class="row">
	<div class="span12">		
		<div class="span8">
			<h2><?php echo 'Informe de actividades ' . date('Y', strtotime('-1 year'));?></h2>
			<h2><?php echo $donativo->institucion->nombre; ?></h2>
			<div>		  
				<h3>Asistencial</h3>
			</div>
			<table class="table table-bordered">
				<caption><h4>Beneficiarios directos</h4></caption>
				<thead class="thead">
					<tr>
						<td><strong>Niños</strong></td>
						<td><strong>Niñas</strong></td>
						<td><strong>Jóvenes hombres</strong></td>
						<td><strong>Jóvenes mujeres</strong></td>
						<td><strong>Adultos hombres</strong></td>
						<td><strong>Adultos mujeres</strong></td>
						<td><strong>Ancianos</strong></td>
						<td><strong>Ancianas</strong></td>
						<td><strong>Total directos</strong></td>
						<td><strong>Indirectos</strong></td>
					</tr>
				</thead>
				<tbody>			
					<tr>
						<td><?php echo $info['numeroBeneficiariosNinosH'];?></td>	
						<td><?php echo $info['numeroBeneficiariosNinosM'];?></td>	
						<td><?php echo $info['numeroBeneficiariosJovenesH'];?></td>	
						<td><?php echo $info['numeroBeneficiariosJovenesM'];?></td>	
						<td><?php echo $info['numeroBeneficiariosAdultosH'];?></td>	
						<td><?php echo $info['numeroBeneficiariosAdultosM'];?></td>	
						<td><?php echo $info['numeroBeneficiariosMayorH'];?></td>	
						<td><?php echo $info['numeroBeneficiariosMayorM'];?></td>	
						<td><?php echo $info['numeroBeneficiariosTotales']?></td>
						<td><?php echo $info['numeroBeneficiariosIndirectos'];?></td>	
					</tr>
				</tbody>
			</table>
		</div>
	</div>
</div>
<div class="row">
	<div class="span12">
		<div class="span4">
			<table class="table table-bordered">
				<caption><h4>Programas</h4></caption>
				<thead class="thead">
					<tr>
						<td style="text-align:center;"><strong>Nombre</strong></td>
						<td style="text-align:center;"><strong>Horas voluntarias</strong></td>
					</tr>
				</thead>
				<tbody>			
					<tr>
						<td><?php echo $info['nombreProgramaUno'];?></td>
						<td style="text-align:center;"><?php echo $info['horasVoluntariosProgramaUno'];?></td>
					</tr>
					<tr>
						<td><?php echo $info['nombreProgramaDos'];?></td>
						<td style="text-align:center;"><?php echo $info['horasVoluntariosProgramaDos'];?></td>
					</tr>
					<tr>
						<td><?php echo $info['nombreProgramaTres'];?></td>
						<td style="text-align:center;"><?php echo $info['horasVoluntariosProgramaTres'];?></td>
					</tr>
					<tr>
						<td><?php echo $info['nombreProgramaCuatro'];?></td>
						<td style="text-align:center;"><?php echo $info['horasVoluntariosProgramaCuatro'];?></td>
					</tr>
					<tr>
						<td><?php echo $info['nombreProgramaCinco'];?></td>
						<td style="text-align:center;"><?php echo $info['horasVoluntariosProgramaCinco'];?></td>
					</tr>				
				</tbody>
				<tfoot>
					<tr>
						<td><strong><?php echo 'Total horas voluntarias'?></strong></td>
						<td style="text-align:center;">
							<?php 
								$totalHorasVoluntarias 	= 	$info['horasVoluntariosProgramaUno'] +
															$info['horasVoluntariosProgramaDos'] +
															$info['horasVoluntariosProgramaTres'] +
															$info['horasVoluntariosProgramaCuatro'] +
															$info['horasVoluntariosProgramaCinco'];
								echo $totalHorasVoluntarias;
							?>
						</td>
					</tr>
				</tfoot>
			</table>
		</div>
		<div class="span4">
			<table class="table table-bordered">
				<caption><h4>Equipo operativo</h4></caption>
				<thead class="thead">
					<tr>
						<td style="text-align:center;"><strong>Personal</strong></td>
						<td style="text-align:center;"><strong>Cantidad</strong></td>
					</tr>
				</thead>
				<tbody>			
					<tr>
						<td>Nómina</td>
						<td style="text-align:center;"><?php echo $info['numeroPersonasNomina'];?></td>
					</tr>
					<tr>
						<td>Asimilables</td>
						<td style="text-align:center;"><?php echo $info['numeroPersonasAsimilables'];?></td>
					</tr>
					<tr>
						<td>Profesionales</td>
						<td style="text-align:center;"><?php echo $info['numeroPersonasProfesionales'];?></td>
					</tr>
					<tr>
						<td>Voluntarias</td>
						<td style="text-align:center;"><?php echo $info['numeroPersonasVoluntarias'];?></td>
					</tr>
					<tr>
						<td>Prestadores servicio social</td>
						<td style="text-align:center;"><?php echo $info['numeroPersonasPrestadoresSS'];?></td>
					</tr>				
				</tbody>
				<tfoot>
					<tr>
						<td><strong><?php echo 'Total horas de personal'?></strong></td>
						<td style="text-align:center;">
							<?php 
								$totalHorasVoluntarias 	= 	$info['horasVoluntariosProgramaUno'] +
															$info['horasVoluntariosProgramaDos'] +
															$info['horasVoluntariosProgramaTres'] +
															$info['horasVoluntariosProgramaCuatro'] +
															$info['horasVoluntariosProgramaCinco'];
								echo $totalHorasVoluntarias;
							?>
						</td>
					</tr>
				</tfoot>
			</table>
		</div>
	</div>
</div>
<div class="row">
	<div class="span12">
		<div class="span8">
			<div>		  
				<h3>Convocatorias y promoción</h3>
			</div>
		</div>
		<br/>
		<div class="span4">
			<table class="table table-bordered">
				<caption><h4>Participación en convocatorias</h4></caption>
				<thead class="thead">
					<tr>
						<td style="text-align:center;"><strong>Convocatoria</strong></td>
						<td style="text-align:center;"><strong>Aprobada</strong></td>
					</tr>
				</thead>
				<tbody>			
					<tr>
						<td><?php echo $info['nombreConvocatoriaUno'];?></td>
						<td style="text-align:center;"><?php echo ($info['aprovadaConvocatoriaUno']==0) ? 
							'No' : 
							'Si';?>
						</td>
					</tr>
					<tr>
						<td><?php echo $info['nombreConvocatoriaDos'];?></td>
						<td style="text-align:center;"><?php echo ($info['aprovadaConvocatoriaDos']==0) ? 
							'No' : 
							'Si';?>
						</td>
					</tr>
					<tr>
						<td><?php echo $info['nombreConvocatoriaTres'];?></td>
						<td style="text-align:center;"><?php echo ($info['aprovadaConvocatoriaTres']==0) ? 
							'No' : 
							'Si';?>
						</td>
					</tr>
					<tr>
						<td><?php echo $info['nombreConvocatoriaCuatro'];?></td>
						<td style="text-align:center;"><?php echo ($info['aprovadaConvocatoriaCuatro']==0) ? 
							'No' : 
							'Si';?>
						</td>
					</tr>
					<tr>
						<td><?php echo $info['nombreConvocatoriaCinco'];?></td>
						<td style="text-align:center;"><?php echo ($info['aprovadaConvocatoriaCinco']==0) ? 
							'No' : 
							'Si';?>
						</td>
					</tr>
					<tr>
						<td><?php echo $info['nombreConvocatoriaSeis'];?></td>
						<td style="text-align:center;"><?php echo ($info['aprovadaConvocatoriaSeis']==0) ? 
							'No' : 
							'Si';?>
						</td>
					</tr>
					<tr>
						<td><?php echo $info['nombreConvocatoriaSiete'];?></td>
						<td style="text-align:center;"><?php echo ($info['aprovadaConvocatoriaSiete']==0) ? 
							'No' : 
							'Si';?>
						</td>
					</tr>
					<tr>
						<td><?php echo $info['nombreConvocatoriaOcho'];?></td>
						<td style="text-align:center;"><?php echo ($info['aprovadaConvocatoriaOcho']==0) ? 
							'No' : 
							'Si';?>
						</td>
					</tr>
					<tr>
						<td><?php echo $info['nombreConvocatoriaNueve'];?></td>
						<td style="text-align:center;"><?php echo ($info['aprovadaConvocatoriaNueve']==0) ? 
							'No' : 
							'Si';?>
						</td>
					</tr>
					<tr>
						<td><?php echo $info['nombreConvocatoriaDiez'];?></td>
						<td style="text-align:center;"><?php echo ($info['aprovadaConvocatoriaDiez']==0) ? 
							'No' : 
							'Si';?>
						</td>
					</tr>
				</tbody>
				<tfoot>
					<tr>
						<td><strong><?php echo 'Total convocatorias aprobadas'?></strong></td>
						<td style="text-align:center;">
							<?php 
								$totalHorasVoluntarias 	= 	$info['aprovadaConvocatoriaUno'] +
															$info['aprovadaConvocatoriaDos'] +
															$info['aprovadaConvocatoriaTres'] +
															$info['aprovadaConvocatoriaCuatro'] +
															$info['aprovadaConvocatoriaCinco'] +
															$info['aprovadaConvocatoriaSeis'] +
															$info['aprovadaConvocatoriaSiete'] +
															$info['aprovadaConvocatoriaOcho'] +
															$info['aprovadaConvocatoriaNueve'] +
															$info['aprovadaConvocatoriaDiez'];
								echo $totalHorasVoluntarias;
							?>
						</td>
					</tr>
				</tfoot>
			</table>
		</div>
		<div class="span4">
			<table class="table table-bordered">
				<caption><h4>Promoción</h4></caption>
				<thead class="thead">
					<tr>
						<td style="text-align:center;"><strong>Medio</strong></td>
						<td style="text-align:center;"><strong>Usado</strong></td>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>Periódico</td>
						<td style="text-align:center;"><?php echo ($info['periodico']==0) ? 
							'No' : 
							'Si';?>
						</td>
					</tr>
					<tr>
						<td>Radio</td>
						<td style="text-align:center;"><?php echo ($info['radio']==0) ? 
							'No' : 
							'Si';?>
						</td>
					</tr>
					<tr>
						<td>Espectaculares</td>
						<td style="text-align:center;"><?php echo ($info['espectaculares']==0) ? 
							'No' : 
							'Si';?>
						</td>
					</tr>
					<tr>
						<td>Informe impreso</td>
						<td style="text-align:center;"><?php echo ($info['informeImpreso']==0) ? 
							'No' : 
							'Si';?>
						</td>
					</tr>
					<tr>
						<td>Revitas</td>
						<td style="text-align:center;"><?php echo ($info['revistas']==0) ? 
							'No' : 
							'Si';?>
						</td>
					</tr>
					<tr>
						<td>Televisión</td>
						<td style="text-align:center;"><?php echo ($info['television']==0) ? 
							'No' : 
							'Si';?>
						</td>
					</tr>
					<tr>
						<td>Folletos</td>
						<td style="text-align:center;"><?php echo ($info['folletos']==0) ? 
							'No' : 
							'Si';?>
						</td>
					</tr>
					<tr>
						<td>Redes sociales</td>
						<td style="text-align:center;"><?php echo ($info['redesSociales']==0) ? 
							'No' : 
							'Si';?>
						</td>
					</tr>
					<tr>
						<td>Página web</td>
						<td style="text-align:center;"><?php echo ($info['paginaWeb']==0) ? 
							'No' : 
							'Si';?>
						</td>
					</tr>
					<tr>
						<td>Otros</td>
						<td style="text-align:center;"><?php echo ($info['otros']==0) ? 
							'No' : 
							'Si';?>
						</td>
					</tr>
					<tr>
						<td>Ninguna</td>
						<td style="text-align:center;"><?php echo ($info['ninguna']==0) ? 
							'No' : 
							'Si';?>
						</td>
					</tr>
				</tbody>
			</table>
		</div>
	</div>
</div>
<?php
	//Sección de Ingresos
?>
<div class="row">
	<div class="span12">
		<div class="span8">
			<div>		  
				<h3>Financiera</h3>
			</div>
			<div>					  
				<h6>Ingresos</h6>
				<br/>
			</div>
		</div>
	</div>
</div>
<div class="row">
	<div class="span12">		
		<div class="span3">
			<table class="table table-bordered">
				<caption><h4>Ingresos por donativos</h4></caption>
				<thead class="thead">
					<tr>
						<td style="text-align:center;"><strong>Descripción</strong></td>
						<td style="text-align:center;"><strong>Cantidad</strong></td>
					</tr>
				</thead>
				<tbody>			
					<tr>
						<td>Persona física</td>
						<td style="text-align:right;"><?php echo '$' . number_format($donativo['personaFisica']);?></td>
					</tr>
					<tr>
						<td>Persona moral</td>
						<td style="text-align:right;"><?php echo '$' . number_format($donativo['personaMoral']);?></td>
					</tr>
					<tr>
						<td>Fundaciones nacionales</td>
						<td style="text-align:right;"><?php echo '$' . number_format($donativo['fundacionesNacionales']);?></td>
					</tr>
					<tr>
						<td>Fundaciones extranjeras</td>
						<td style="text-align:right;"><?php echo '$' . number_format($donativo['fundacionesExtrajeras']);?></td>
					</tr>
					<tr>
						<td>Municipal</td>
						<td style="text-align:right;"><?php echo '$' . number_format($donativo['fondosGubernamentalesMunicipal']);?></td>
					</tr>
					<tr>
						<td>Estatal</td>
						<td style="text-align:right;"><?php echo '$' . number_format($donativo['fondosGubernamentalesEstatal']);?></td>
					</tr>
					<tr>
						<td>Federal</td>
						<td style="text-align:right;"><?php echo '$' . number_format($donativo['fondosGubernamentalesFederal']);?></td>
					</tr>
					<tr>
						<td>Especie</td>
						<td style="text-align:right;"><?php echo '$' . number_format($donativo['especie']);?></td>
					</tr>
				</tbody>
				<tfoot>
					<tr>
						<td><strong><?php echo 'Total ingresos por donativos'?></strong></td>
						<td style="text-align:right;">
							<?php 
								$totalIngresoDonativo 	= 	$donativo['personaFisica'] +
															$donativo['personaMoral'] +
															$donativo['fundacionesNacionales'] +
															$donativo['fundacionesExtrajeras'] +
															$donativo['fondosGubernamentalesMunicipal'] +
															$donativo['fondosGubernamentalesEstatal'] +
															$donativo['especie'] +
															$donativo['fondosGubernamentalesFederal'];
								echo '$' . number_format($totalIngresoDonativo);
							?>
						</td>
					</tr>
				</tfoot>
			</table>
		</div>
		<div class="span2">
			<table class="table table-bordered">
				<caption><h4>Ingresos por eventos</h4></caption>
				<thead class="thead">
					<tr>
						<td style="text-align:center;"><strong>Descripción</strong></td>
						<td style="text-align:center;"><strong>Cantidad</strong></td>
					</tr>
				</thead>
				<tbody>			
					<tr>
						<td>Colectas</td>
						<td style="text-align:right;"><?php echo '$' . number_format($evento['colectas']);?></td>
					</tr>
					<tr>
						<td>Eventos</td>
						<td style="text-align:right;"><?php echo '$' . number_format($evento['eventos']);?></td>
					</tr>
					<tr>
						<td>Rifas</td>
						<td style="text-align:right;"><?php echo '$' . number_format($evento['rifas']);?></td>
					</tr>
					<tr>
						<td>Conferencias</td>
						<td style="text-align:right;"><?php echo '$' . number_format($evento['conferencias']);?></td>
					</tr>
					<tr>
						<td>Ventas</td>
						<td style="text-align:right;"><?php echo '$' . number_format($evento['ventas']);?></td>
					</tr>
					<tr>
						<td>Otros</td>
						<td style="text-align:right;"><?php echo '$' . number_format($evento['otros']);?></td>
					</tr>
				</tbody>
				<tfoot>
					<tr>
						<td><strong><?php echo 'Total'?></strong></td>
						<td style="text-align:right;">
							<?php 
								$totalIngresosEvento 	= 	$evento['colectas'] +
															$evento['eventos'] +
															$evento['rifas'] +
															$evento['conferencias'] +
															$evento['ventas'] +
															$evento['otros'];
								echo '$' . number_format($totalIngresosEvento);
							?>
						</td>
					</tr>
				</tfoot>
			</table>
			<?php 
				//Ingresos por cuotas de recuperacion 
			?>
			<table class="table table-bordered">
				<caption><h4>Ingresos por cuotas de recuperación</h4></caption>
				<thead class="thead">
					<tr>
						<td style="text-align:center;"><strong>Importe</strong></td>
						<td style="text-align:right;"><?php echo '$' . number_format($cuotaRecuperacion['consultas']);?></td>
					</tr>
				</thead>					
			</table>
		</div>
		<div class="span3">
			<table class="table table-bordered">
				<caption><h4>Inversión</h4></caption>
				<thead class="thead">
					<tr>
						<td style="text-align:center;"><strong>Descripción</strong></td>
						<td style="text-align:center;"><strong>Cantidad</strong></td>
					</tr>
				</thead>
				<tbody>			
					<tr>
						<td>¿Tiene patrimonio?</td>
						<td style="text-align:center;">
						<?php if($inversion['tienePatrimonio'] == 1)
								 echo 'Si';
							else
								echo 'No';
						?>
					</td>
					</tr>
					<tr>
						<td>Institución bancaria</td>
						<td style="text-align:right;"><?php echo '$' . number_format($inversion['institucionBancaria']);?></td>
					</tr>
					<tr>
						<td>Terrenos</td>
						<td style="text-align:right;"><?php echo '$' . number_format($inversion['terrenos']);?></td>
					</tr>
					<tr>
						<td>Inmuebles</td>
						<td style="text-align:right;"><?php echo '$' . number_format($inversion['inmuebles']);?></td>
					</tr>
					<tr>
						<td>Equipo de oficina</td>
						<td style="text-align:right;"><?php echo '$' . number_format($inversion['equipoOficina']);?></td>
					</tr>
					<tr>
						<td>Equipo de transporte</td>
						<td style="text-align:right;"><?php echo '$' . number_format($inversion['equipoTransporte']);?></td>
					</tr>
					<tr>
						<td>Otros</td>
						<td style="text-align:right;"><?php echo '$' . number_format($inversion['otros']);?></td>
					</tr>
				</tbody>
				<tfoot>
					<tr>
						<td><strong><?php echo 'Total inversión'?></strong></td>
						<td style="text-align:right;">
							<?php 
								$totalInversion 	= 	$inversion['terrenos'] +
														$inversion['inmuebles'] +
														$inversion['equipoOficina'] +
														$inversion['institucionBancaria'] +
														$inversion['equipoTransporte'] +														
														$inversion['otros'];
								echo '$' . number_format($totalInversion);
							?>
						</td>
					</tr>
				</tfoot>
			</table>
		</div>
	</div>
</div>
<div class="row">
	<div class="span12">
		<div class="span3">
			&nbsp;
		</div>
		<div class="span2">
			&nbsp;
		</div>
		<div class="span3">
			<div style="border-style:solid; border-width:1px;">		  
				<h5 style="text-align:right">Total de ingresos 
					<?php 
						$totalIngreso = $totalIngresoDonativo + $totalIngresosEvento + $cuotaRecuperacion['consultas'];
						echo '$' . number_format($totalIngreso); 		
					?>
				</h5>
			</div>
		</div>
	</div>
</div>
<div class="row">
	<div class="span12">
		<div class="span8">
			<div>					  
				<h6>Gastos</h6>
				<br/>
			</div>
		</div>
		<div class="span4">
			<table class="table table-bordered">
				<caption><h4>Gasto de administración</h4></caption>
				<thead class="thead">
					<tr>
						<td style="text-align:center;"><strong>Descripción</strong></td>
						<td style="text-align:center;"><strong>Cantidad</strong></td>
					</tr>
				</thead>
				<tbody>			
					<tr>
						<td>Sueldos</td>
						<td style="text-align:right;"><?php echo '$' . number_format($gastosAdmon['sueldos']);?></td>
					</tr>
					<tr>
						<td>Asimilables</td>
						<td style="text-align:right;"><?php echo '$' . number_format($gastosAdmon['asimilables']);?></td>
					</tr>
					<tr>
						<td>Honorarios</td>
						<td style="text-align:right;"><?php echo '$' . number_format($gastosAdmon['honorarios']);?></td>
					</tr>
					<tr>
						<td>Combustibles</td>
						<td style="text-align:right;"><?php echo '$' . number_format($gastosAdmon['combustibles']);?></td>
					</tr>
					<tr>
						<td>Luz, teléfono, agua</td>
						<td style="text-align:right;"><?php echo '$' . number_format($gastosAdmon['luzTelefono']);?></td>
					</tr>
					<tr>
						<td>Papelería</td>
						<td style="text-align:right;"><?php echo '$' . number_format($gastosAdmon['papeleria']);?></td>
					</tr>
					<tr>
						<td>Impuestos y derechos</td>
						<td style="text-align:right;"><?php echo '$' . number_format($gastosAdmon['impuestosDerechos']);?></td>
					</tr>
					<tr>
						<td>Otros</td>
						<td style="text-align:right;"><?php echo '$' . number_format($gastosAdmon['otros']);?></td>
					</tr>
				</tbody>
				<tfoot>
					<tr>
						<td><strong><?php echo 'Total gasto administración'?></strong></td>
						<td style="text-align:right;">
							<?php 
								$totalGastoAdmon 	= 	$gastosAdmon['sueldos'] +
														$gastosAdmon['asimilables'] +
														$gastosAdmon['honorarios'] +
														$gastosAdmon['combustibles'] +
														$gastosAdmon['luzTelefono'] +
														$gastosAdmon['papeleria'] +
														$gastosAdmon['impuestosDerechos'] +
														$gastosAdmon['otros'];
								echo '$' . number_format($totalGastoAdmon);
							?>
						</td>
					</tr>
				</tfoot>
			</table>
		</div>
		<div class="span4">
			<table class="table table-bordered">
				<caption><h4>Gasto operativo</h4></caption>
				<thead class="thead">
					<tr>
						<td style="text-align:center;"><strong>Descripción</strong></td>
						<td style="text-align:center;"><strong>Cantidad</strong></td>
					</tr>
				</thead>
				<tbody>			
					<tr>
						<td>Sueldos</td>
						<td style="text-align:right;"><?php echo '$' . number_format($gastosOperativos['sueldos']);?></td>
					</tr>	
					<tr>
						<td>Asimilables</td>
						<td style="text-align:right;"><?php echo '$' . number_format($gastosOperativos['asimilables']);?></td>
					</tr>			
					<tr>
						<td>Honorarios</td>
						<td style="text-align:right;"><?php echo '$' . number_format($gastosOperativos['honorarios']);?></td>
					</tr>
					<tr>
						<td>Combustibles</td>
						<td style="text-align:right;"><?php echo '$' . number_format($gastosOperativos['combustibles']);?></td>
					</tr>
					<tr>
						<td>Luz, teléfono, agua</td>
						<td style="text-align:right;"><?php echo '$' . number_format($gastosOperativos['luzTelefono']);?></td>
					</tr>
					<tr>
						<td>Papelería</td>
						<td style="text-align:right;"><?php echo '$' . number_format($gastosOperativos['papeleria']);?></td>
					</tr>
					<tr>
						<td>Renta</td>
						<td style="text-align:right;"><?php echo '$' . number_format($gastosOperativos['renta']);?></td>
					</tr>
					<tr>
						<td>Impuestos y derechos</td>
						<td style="text-align:right;"><?php echo '$' . number_format($gastosOperativos['impuestosDerechos']);?></td>
					</tr>
					<tr>
						<td>Otros</td>
						<td style="text-align:right;"><?php echo '$' . number_format($gastosOperativos['otros']);?></td>
					</tr>
				</tbody>
				<tfoot>
					<tr>
						<td><strong><?php echo 'Total gasto operativo'?></strong></td>
						<td style="text-align:right;">
							<?php 
								$totalGastoOperativo = 	$gastosOperativos['sueldos'] +
														$gastosOperativos['asimilables'] +
														$gastosOperativos['honorarios'] +
														$gastosOperativos['combustibles'] +
														$gastosOperativos['luzTelefono'] +
														$gastosOperativos['papeleria'] +
														$gastosOperativos['renta'] +
														$gastosOperativos['impuestosDerechos'] +
														$gastosOperativos['otros'];
								echo '$' . number_format($totalGastoOperativo);
							?>
						</td>
					</tr>
				</tfoot>
			</table>
		</div>
	</div>
</div>
<div class="row">
	<div class="span12">
		<div class="span3">
			&nbsp;
		</div>
		<div class="span2">
			&nbsp;
		</div>
		<div class="span3">
			<div style="border-style:solid; border-width:1px;">		  
				<h5 style="text-align:right;">Total de gasto
					<?php 
						$totalGasto = $totalGastoAdmon + $totalGastoOperativo;
						echo '$' . number_format($totalGasto); 
					?>
				</h5>
			</div>
		</div>
	</div>
</div>
<div class="row">
	<div class="span12">
		<div class="span3">
			&nbsp;
		</div>
		<div class="span2">
			&nbsp;
		</div>
		<div class="span3">
			<?php 
				$diferencia = $totalIngreso - $totalGasto;
					if($totalIngreso >= $totalGasto){ ?>
						<div style="border-style:solid; border-width:1px;">		  
							<h5 style="text-align:right;">Remanente distribuible <?php echo '$' . number_format($diferencia);	?></h5>
						</div>
			<?php }else{ ?>
						<div style="border-style:solid; border-width:1px;">		  
							<h5 style="text-align:right;">Remanente distribuible <?php echo '$' . number_format($diferencia);	?></h5>
						</div>
			<?php } ?>
		</div>
	</div>
</div>

<br/><br/>
<div class="row">
	<div class="span9">
		<blockquote class="pull-right">
			<p>Responsable del llenado de la información.</p>
		  <small> <cite title="Source Title"><?php echo $info['responsableLlenado']; ?></cite></small>
		</blockquote>
	</div>
</div>
<div class="row">
	<div class="span12">
	Fecha de última modificación: <?php echo $evento ->ultimaModificacion_dt; ?>
	</div>
</div>