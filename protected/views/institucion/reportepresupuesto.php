<?php
$this->pageCaption='Presupuesto ' . date('Y');
$this->pageTitle=Yii::app()->name . ' - ' . $this->pageCaption;
$this->pageDescription='';
$this->breadcrumbs=array(
	'Crear',
);

$this->menu=array(
	array('label'=>'Volver ', 'url'=>array('institucion/cuadrogeneral')),
	array('label'=>'Imprimir ', 'url'=>array('institucion/reportepresupuesto','institucion'=>$_GET['institucion'])),
);

$presupuesto = Presupuesto::model()->find('institucion_aid = ' . $_GET['institucion']);
?>
<h2><?php echo 'Presupuesto ' . date('Y');?></h2>
<h2><?php echo $presupuesto->institucion->nombre; ?></h2>
<div>		  
	<h3>Ingresos</h3>
</div>
<br/>
<div class="row">
	<div class="span12">
		<div class="span2">
			<table class="table table-striped table-bordered" style="font-size:8pt;">
				<caption><h4>Donativos</h4></caption>
				<thead class="thead">
					<tr>
						<td style="text-align:center;"><strong>Descripción</strong></td>
						<td style="text-align:center;"><strong>Cantidad</strong></td>
					</tr>
				</thead>
				<tbody>			
					<tr>
						<td>Persona física</td>
						<td style="text-align:right;"><?php echo '$' . number_format($presupuesto['personaFisica']);?></td>
					</tr>
					<tr>
						<td>Persona moral</td>
						<td style="text-align:right;"><?php echo '$' . number_format($presupuesto['personaMoral']);?></td>
					</tr>
					<tr>
						<td>Fundaciones nacionales</td>
						<td style="text-align:right;"><?php echo '$' . number_format($presupuesto['fundacionesNacionales']);?></td>
					</tr>
					<tr>
						<td>Fundaciones extranjeras</td>
						<td style="text-align:right;"><?php echo '$' . number_format($presupuesto['fundacionesExtranjeras']);?></td>
					</tr>
					<tr>
						<td>Municipal</td>
						<td style="text-align:right;"><?php echo '$' . number_format($presupuesto['fondosGubernamentalesMunicipal']);?></td>
					</tr>
					<tr>
						<td>Estatal</td>
						<td style="text-align:right;"><?php echo '$' . number_format($presupuesto['fondosGubernamentalesEstatal']);?></td>
					</tr>
					<tr>
						<td>Federal</td>
						<td style="text-align:right;"><?php echo '$' . number_format($presupuesto['fondosGubernamentalesFederal']);?></td>
					</tr>
					<tr>
						<td>Especie</td>
						<td style="text-align:right;"><?php echo '$' . number_format($presupuesto['especie']);?></td>
					</tr>
				</tbody>
				<tfoot>
					<tr>
						<td><strong><?php echo 'Total'?></strong></td>
						<td style="text-align:center;">
							<?php 
								$totalIngresoDonativo 	= 	$presupuesto['personaFisica'] +
															$presupuesto['personaMoral'] +
															$presupuesto['fundacionesNacionales'] +
															$presupuesto['fundacionesExtranjeras'] +
															$presupuesto['fondosGubernamentalesMunicipal'] +
															$presupuesto['fondosGubernamentalesEstatal'] +
															$presupuesto['fondosGubernamentalesFederal'] +
															$presupuesto['especie'];
								echo '$' . number_format($totalIngresoDonativo);
							?>
						</td>
					</tr>
				</tfoot>
			</table>
		</div>
		<div class="span3">
			<table class="table table-striped table-bordered">
				<caption><h4>Eventos</h4></caption>
				<thead class="thead">
					<tr>
						<td style="text-align:center;"><strong>Descripción</strong></td>
						<td style="text-align:center;"><strong>Cantidad</strong></td>
					</tr>
				</thead>
				<tbody>			
					<tr>
						<td>Colectas</td>
						<td style="text-align:right;"><?php echo '$' . number_format($presupuesto['colectas']);?></td>
					</tr>
					<tr>
						<td>Eventos</td>
						<td style="text-align:right;"><?php echo '$' . number_format($presupuesto['eventos']);?></td>
					</tr>
					<tr>
						<td>Rifas</td>
						<td style="text-align:right;"><?php echo '$' . number_format($presupuesto['rifas']);?></td>
					</tr>
					<tr>
						<td>Conferencias</td>
						<td style="text-align:right;"><?php echo '$' . number_format($presupuesto['conferencias']);?></td>
					</tr>
					<tr>
						<td>Ventas</td>
						<td style="text-align:right;"><?php echo '$' . number_format($presupuesto['ventas']);?></td>
					</tr>
					<tr>
						<td>Otros</td>
						<td style="text-align:right;"><?php echo '$' . number_format($presupuesto['ieOtros']);?></td>
					</tr>
				</tbody>
				<tfoot>
					<tr>
						<td><strong><?php echo 'Total ingreso por evento'?></strong></td>
						<td style="text-align:right;">
							<?php 
								$totalIngresosEvento 	= 	$presupuesto['colectas'] +
															$presupuesto['eventos'] +
															$presupuesto['rifas'] +
															$presupuesto['conferencias'] +
															$presupuesto['ventas'] +
															$presupuesto['ieOtros'];
								echo '$' . number_format($totalIngresosEvento);
							?>
						</td>
					</tr>
				</tfoot>
			</table>
			<?php 
				//Ingresos por cuotas de recuperacion 
			?>
			<table class="table table-striped table-bordered">
				<caption><h4>Cuotas de recuperación</h4></caption>
				<thead class="thead">
					<tr>
						<td style="text-align:center;"><strong>Importe</strong></td>
						<td style="text-align:right;"><?php echo '$' . number_format($presupuesto['importeCuotas']);?></td>
					</tr>
				</thead>					
			</table>
		</div>
		<div class="span3">
			<table class="table table-striped table-bordered">
				<caption><h4>Inversión</h4></caption>
				<thead class="thead">
					<tr>
						<td style="text-align:center;"><strong>Descripción</strong></td>
						<td style="text-align:center;"><strong>Cantidad</strong></td>
					</tr>
				</thead>
				<tbody>				
					<tr>
						<td>Institución bancaria</td>
						<td style="text-align:right;"><?php echo '$' . number_format($presupuesto['institucionBancaria']);?></td>
					</tr>
					<tr>
						<td>Terrenos</td>
						<td style="text-align:right;"><?php echo '$' . number_format($presupuesto['terrenos']);?></td>
					</tr>
					<tr>
						<td>Inmuebles</td>
						<td style="text-align:right;"><?php echo '$' . number_format($presupuesto['inmuebles']);?></td>
					</tr>
					<tr>
						<td>Equipo de oficina</td>
						<td style="text-align:right;"><?php echo '$' . number_format($presupuesto['equipoOficina']);?></td>
					</tr>
					<tr>
						<td>Equipo de transporte</td>
						<td style="text-align:right;"><?php echo '$' . number_format($presupuesto['equipoTransporte']);?></td>
					</tr>
					<tr>
						<td>Otros</td>
						<td style="text-align:right;"><?php echo '$' . number_format($presupuesto['otros']);?></td>
					</tr>
				</tbody>
				<tfoot>
					<tr>
						<td><strong><?php echo 'Total'?></strong></td>
						<td style="text-align:right;">
							<?php 
								$totalInversion 	= 	$presupuesto['terrenos'] +
														$presupuesto['inmuebles'] +
														$presupuesto['equipoOficina'] +
														$presupuesto['equipoTransporte'] +														
														$presupuesto['otros'];
								echo '$' . number_format($totalInversion);
							?>
						</td>
					</tr>
				</tfoot>
			</table>
			<table class="table table-striped table-bordered">
			<caption><h4>Inversión en institución bancaria</h4></caption>
			<thead class="thead">
				<tr>
					<td style="text-align:center;"><strong>Importe</strong></td>
					<td style="text-align:right;"><?php echo '$' . number_format($presupuesto['inversionesBancos']);?></td>
				</tr>
			</thead>					
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
						$totalIngreso = $totalIngresoDonativo + $totalIngresosEvento + $presupuesto['importeCuotas'];
						echo '$' . number_format($totalIngreso); 		
					?>
				</h5>
			</div>
		</div>
	</div>
</div>
<div>		  
	<h3>Gastos</h3>
</div>
<div class="row">
	<div class="span12">
		<div class="span3">
			<table class="table table-striped table-bordered">
				<caption><h4>Administración</h4></caption>
				<thead class="thead">
					<tr>
						<td style="text-align:center;"><strong>Descripción</strong></td>
						<td style="text-align:center;"><strong>Cantidad</strong></td>
					</tr>
				</thead>
				<tbody>			
					<tr>
						<td>Sueldos</td>
						<td style="text-align:right;"><?php echo '$' . number_format($presupuesto['gaSueldos']);?></td>
					</tr>
					<tr>
						<td>Asimilables</td>
						<td style="text-align:right;"><?php echo '$' . number_format($presupuesto['gaAsimilables']);?></td>
					</tr>
					<tr>
						<td>Honorarios</td>
						<td style="text-align:right;"><?php echo '$' . number_format($presupuesto['gaHonorarios']);?></td>
					</tr>
					<tr>
						<td>Combustibles</td>
						<td style="text-align:right;"><?php echo '$' . number_format($presupuesto['gaCombustibles']);?></td>
					</tr>
					<tr>
						<td>Luz, teléfono, agua</td>
						<td style="text-align:right;"><?php echo '$' . number_format($presupuesto['gaLuzTelefono']);?></td>
					</tr>
					<tr>
						<td>Papelería</td>
						<td style="text-align:right;"><?php echo '$' . number_format($presupuesto['gaPapeleria']);?></td>
					</tr>
					<tr>
						<td>Impuestos y derechos</td>
						<td style="text-align:right;"><?php echo '$' . number_format($presupuesto['gaImpuestosDerechos']);?></td>
					</tr>
					<tr>
						<td>Otros</td>
						<td style="text-align:right;"><?php echo '$' . number_format($presupuesto['gaOtros']);?></td>
					</tr>
				</tbody>
				<tfoot>
					<tr>
						<td><strong><?php echo 'Total gasto administración'?></strong></td>
						<td style="text-align:right;">
							<?php 
								$totalGastoAdmon 	= 	$presupuesto['gaSueldos'] +
														$presupuesto['gaAsimilables'] +
														$presupuesto['gaHonorarios'] +
														$presupuesto['gaCombustibles'] +
														$presupuesto['gaLuzTelefono'] +
														$presupuesto['gaPapeleria'] +
														$presupuesto['gaImpuestosDerechos'] +
														$presupuesto['gaOtros'];
								echo '$' . number_format($totalGastoAdmon);
							?>
						</td>
					</tr>
				</tfoot>
			</table>
		</div>
		<div class="span3">
			<table class="table table-striped table-bordered">
				<caption><h4>Operativo</h4></caption>
				<thead class="thead">
					<tr>
						<td style="text-align:center;"><strong>Descripción</strong></td>
						<td style="text-align:center;"><strong>Cantidad</strong></td>
					</tr>
				</thead>
				<tbody>			
					<tr>
						<td>Sueldos</td>
						<td style="text-align:right;"><?php echo '$' . number_format($presupuesto['goSueldos']);?></td>
					</tr>	
					<tr>
						<td>Asimilables</td>
						<td style="text-align:right;"><?php echo '$' . number_format($presupuesto['goAsimilables']);?></td>
					</tr>			
					<tr>
						<td>Honorarios</td>
						<td style="text-align:right;"><?php echo '$' . number_format($presupuesto['goHonorarios']);?></td>
					</tr>
					<tr>
						<td>Combustibles</td>
						<td style="text-align:right;"><?php echo '$' . number_format($presupuesto['goCombustibles']);?></td>
					</tr>
					<tr>
						<td>Luz, teléfono, agua</td>
						<td style="text-align:right;"><?php echo '$' . number_format($presupuesto['goLuzTelefono']);?></td>
					</tr>
					<tr>
						<td>Papelería</td>
						<td style="text-align:right;"><?php echo '$' . number_format($presupuesto['goPapeleria']);?></td>
					</tr>
					<tr>
						<td>Renta</td>
						<td style="text-align:right;"><?php echo '$' . number_format($presupuesto['goRenta']);?></td>
					</tr>
					<tr>
						<td>Impuestos y derechos</td>
						<td style="text-align:right;"><?php echo '$' . number_format($presupuesto['goImpuestosDerechos']);?></td>
					</tr>
					<tr>
						<td>Otros</td>
						<td style="text-align:right;"><?php echo '$' . number_format($presupuesto['goOtros']);?></td>
					</tr>
				</tbody>
				<tfoot>
					<tr>
						<td><strong><?php echo 'Total gasto operativo'?></strong></td>
						<td style="text-align:right;">
							<?php 
								$totalGastoOperativo = 	$presupuesto['goSueldos'] +
														$presupuesto['goAsimilables'] +
														$presupuesto['goHonorarios'] +
														$presupuesto['goCombustibles'] +
														$presupuesto['goLuzTelefono'] +
														$presupuesto['goPapeleria'] +
														$presupuesto['goRenta'] +
														$presupuesto['goImpuestosDerechos'] +
														$presupuesto['goOtros'];
								echo '$' . number_format($totalGastoOperativo);
							?>
						</td>
					</tr>
				</tfoot>
			</table>
		</div>
		<div class="span2">
			<table class="table table-striped table-bordered">
				<caption><h4>Promoción</h4></caption>
				<thead class="thead">
					<tr>
						<td style="text-align:center;"><strong>Importe</strong></td>
						<td style="text-align:center;"><?php echo '$' . number_format($presupuesto['promocion']);?></td>
					</tr>
				</thead>					
			</table>
		</div>
	</div>
</div>
<br/>
<div class="row">
	<div class="span12">
		<div class="span3">
			&nbsp;
		</div>
		<div class="span3">
			&nbsp;
		</div>
		<div class="span2">
			<div style="border-style:solid; border-width:1px; text-align:right;">		  
				<h5>Total de gasto
					<?php 
						$totalGasto = $totalGastoAdmon + $totalGastoOperativo + $presupuesto['promocion'];
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
		<div class="span3" style="text-align:right">
			<?php 
				$diferencia = $totalIngreso + $presupuesto['inversionesBancos'] - $totalGasto - $totalInversion;
					if($totalIngreso >= $totalGasto){ ?>
						<div style="border-style:solid; border-width:1px;">		  
							<h5>Remanente distribuible $<?php echo number_format($diferencia);	?></h5>
						</div>
			<?php }else{ ?>
						<div style="border-style:solid; border-width:1px;">		  
							<h5>Remanente distribuible $<?php echo number_format($diferencia);	?></h5>
						</div>						
			<?php } ?>
		</div>
	</div>
</div>
<div class="row">
	<div class="span9">
		<blockquote class="pull-right">
			<p>Responsable del llenado de la información.</p>
		  <small> <cite title="Source Title"><?php echo $presupuesto->responsableLlenado; ?></cite></small>
		</blockquote>
	</div>
</div>
<div class="row">
	<div class="span12">
		Fecha de última modificación: <?php echo $presupuesto->ultimaModificacion_dt; ?>
	</div>
</div>