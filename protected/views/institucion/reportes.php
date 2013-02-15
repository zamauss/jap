<?php
	$this->pageCaption='Sección de Reportes';
	$this->pageTitle='Algunas estadísticas';
	$this->pageDescription='';
	$this->breadcrumbs=array(
		'Administrador',
	);
	
	$this->menu=array(
		array('label'=>'Volver ', 'url'=>array('site/index')),
	);	

?>
<div class="form">
<legend>Elige una opción:</legend>
<?php 
	$form=$this->beginWidget('BActiveForm', array(
	'id'=>'institucion-form',
	'enableAjaxValidation'=>false,
	)); 
?>

<div id="container">
	<div class="row">
		<div class="span12">
			<div class="span5">
				<table class="table table-bordered">
					<thead class="thead">
						<tr>
							<td style="text-align:center;"><b>Municipio</b></td>
							<td style="text-align:center;"><b>Ámbito</b></td>
							<td style="text-align:center;"><b>Reporte</b></td>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td style="text-align:center;">
								<?php echo CHtml::dropDownList('domicilioMunicipio_aid', '',
												CHtml::listData(Municipio::model()->findAll(), 'id', 'nombre'),
												array(
													'empty'=>'Todos',
													'ajax' => array(
														'type'=>'POST', //request type
														'url'=>CController::createUrl('institucion/actualizafiltro'),				
														'update'=>'#filtro',
													)));  ?>
							</td>
							<td style="text-align:center;">
								<?php echo CHtml::dropDownList('ambito_did', '',CHtml::listData(Ambito::model()->findAll(), 'id', 'nombre'),
									array(
											'empty'=>'Todos',
											'ajax' => array(
											'type'=>'POST', //request type
											'url'=>CController::createUrl('institucion/actualizafiltro'),				
											'update'=>'#filtro',
										)));  
								?>
							</td>
							<td style="text-align:center;">
								<?php echo CHtml::dropDownList('reporte','', array( 'rfc'			=>'IAP con RFC',
																					'autorizadas'	=>'IAP Autorizadas',
																					'cluni'			=>'IAP con Cluni',
																					'volintarios'	=>'Número de voluntarios',
																					'especie'		=>'Ingresos por especie',
																					'efectivo'		=>'Ingresos en efectivo',
																					'personas'		=>'Personas por IAP',
																					),
									array(
										'empty'=>'Otros reportes',
										'ajax' => array(
										'type'=>'POST',
										'url'=>CController::createUrl('institucion/actualizafiltro'),				
										'update'=>'#filtro',
									))); ?>
							</td>	
						</tr>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>
	
<?php $this->endWidget(); ?>
<br/>
<div class="row">
	<div class="span12">
		<div id="filtro">
	</div>
</div>