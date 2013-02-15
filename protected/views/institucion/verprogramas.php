<?php
$this->pageCaption='Programa de trabajo ' . date('Y');
$this->pageTitle=Yii::app()->name . ' - ' . $this->pageCaption;
$this->pageDescription='';
$this->breadcrumbs=array(
	'Crear',
);
$usuarioActual = Usuario::model()->find('usuario = "' . Yii::app()->user->name . '"');

if($usuarioActual->tipousuario->nombre == "Administrador")
{
	$this->menu=array(
		array('label'=>'Volver ', 'url'=>array('institucion/cuadrogeneral')),
		array('label'=>'Imprimir ', 'url'=>array('institucion/reporteprogramas','institucion'=>$model->institucion_id)),
	);
}
else
{
	$this->menu=array(
		array('label'=>'Volver ', 'url'=>array('institucion/acciones')),
		array('label'=>'Imprimir ', 'url'=>array('institucion/reporteprogramas','institucion'=>$model->institucion_id)),
	);
}

echo '<h2>' . $model->institucion->nombre . '</h2>';
	foreach($model->programas as $prog){
	?>
		<div class="alert alert-info">		  
			<h3><?php echo $prog->nombre; ?></h3>
		</div>
		<div class="row">
			<div class="span6">
				<table class="table table-striped table-bordered">
					<thead class="thead">
						<tr>
							
							<td><strong>Fecha Incial</strong></td>
							<td><strong>Fecha Final</strong></td>
						</tr>
					</thead>
					<tbody>			
						<tr>
							<td><?php echo $prog->fechaInicio_dt; ?></td>	
							<td><?php echo $prog->fechaFin_dt ?></td>	
						</tr>
					</tbody>
				</table>
			</div>
			<div class="span6">
				<table class="table table-striped table-bordered">
					<thead class="thead">
						<tr>
							<td><strong>Categoria</strong></td>
							<td><strong>Ambito</strong></td>
						</tr>
					</thead>
					<tbody>			
						<tr>
							<td><?php echo $prog->categoriaLabels[$prog->categoria]; ?></td>	
							<td><?php echo $prog->ambitoLabels[$prog->ambito]; ?></td>	
						</tr>
					</tbody>
				</table>
			</div>
		</div>
		<div class="row">
			<div class="span6">
				<table class="table table-striped table-bordered">
					<thead class="thead">
						<tr>							
							<td><strong>Objetivos</strong></td>
						</tr>
					</thead>
					<tbody>			
						<tr>
							
							<td><?php echo $prog->objetivos; ?></td>	
						</tr>
					</tbody>
				</table>
			</div>
			<div class="span6">
				<table class="table table-striped table-bordered">
					<thead class="thead">
						<tr>							
							<td><strong>Metas</strong></td>
						</tr>
					</thead>
					<tbody>			
						<tr>
							
							<td><?php echo $prog->metas; ?></td>	
						</tr>
					</tbody>
				</table>
			</div>
		</div>
		<div class="row">
			<div class="span6">
				<table class="table table-striped table-bordered">
					<thead class="thead">
						<tr>							
							<td><strong>Recursos Humanos</strong></td>
						</tr>
					</thead>
					<tbody>			
						<tr>
							
							<td><?php echo $prog->recursos_humanos; ?></td>	
						</tr>
					</tbody>
				</table>
			</div>
			<div class="span6">
				<table class="table table-striped table-bordered">
					<thead class="thead">
						<tr>							
							<td><strong>Recursos Materiales</strong></td>
						</tr>
					</thead>
					<tbody>			
						<tr>
							
							<td><?php echo $prog->recursos_materiales; ?></td>	
						</tr>
					</tbody>
				</table>
			</div>
		</div>
		<div class="row">
			<div class="span6">
				<table class="table table-striped table-bordered">
					<thead class="thead">
						<tr>							
							<td><strong>Recursos Financieros</strong></td>
						</tr>
					</thead>
					<tbody>			
						<tr>
							
							<td><?php echo $prog->recursos_financieros; ?></td>	
						</tr>
					</tbody>
				</table>
			</div>
		</div>
		
	<?php
	}
?>