<?php
$this->pageCaption='Ver el cuadro general';
$this->pageTitle=Yii::app()->name . ' - ' . $this->pageCaption;
$this->pageDescription='';
$this->breadcrumbs=array(
	'Cuadro General',
);
1
$this->menu=array(
		array('label'=>'Volver ', 'url'=>array('site/index')),
		array('label'=>'Gráficas ', 'url'=>array('graficasinstituciones')),
);
?>

<div class="row">
	<div class="span12">		
		<div class="tabbable"> <!-- Only required for left/right tabs -->
			<ul class="nav nav-pills">
				<li class="active"><a href="#tab1" data-toggle="tab">Resumen</a></li>
				<!--
				<li><a href="#tab2" data-toggle="tab">Presupuesto</a></li>
				<li><a href="#tab3" data-toggle="tab">Rep. Actividades</a></li>
				<li><a href="#tab4" data-toggle="tab">Prog. Trabajo</a></li>
				-->
			</ul>
			<div class="tab-content">
				<div class="tab-pane active" id="tab1">
					<?php
						$connection=Yii::app()->db;
						$sql = 'select id, nombre, 
								if(usuario_did=2,0,1) as Registro,
								(select count(*) from Presupuesto where institucion_aid = i.id) as Presupuesto,
								(select count(*) from IngresoPorDonativo where institucion_aid = i.id) as Actividades,
								(select count(*) from programa_de_trabajo where institucion_id = i.id) as Programa
								from Institucion as i;';
						$instituciones=$connection->createCommand($sql)->queryAll();		
						$contador = 1;				
					?>
					<table class="table table-striped">
						<caption><h4>Cuadro de Comportamientos</h4></caption>
						<thead class="thead">
							<tr>
								<td><strong>No.</strong></td>
								<td><strong>Institución</strong></td>
								<td><strong>Registro</strong></td>
								<td><strong>Informe</strong></td>
								<td><strong>Programa</strong></td>
								<td><strong>Presupuesto</strong></td>
							</tr>
						</thead>
						<tbody>
						<?php foreach($instituciones as $institucion){ ?>
							<tr>
								<td><?php echo $contador;?></td>
								<td><?php echo $institucion['nombre'];?></td>	
								<td style="text-align:center;"><?php 
										echo ($institucion['Registro']=='0') ? 
											'<span class="label label-important"><i class="icon-remove icon-white"></i></span>' : 
											CHtml::link('<span class="label label-success"><i class="icon-ok icon-white"></i></span>',
												array('view', 'id'=>$institucion['id']));
									?>
								</td>									
								<td style="text-align:center;"><?php 
										echo ($institucion['Actividades']=='0') ? 
											'<span class="label label-important"><i class="icon-remove icon-white"></i></span>' : 
											CHtml::link('<span class="label label-success"><i class="icon-ok icon-white"></i></span>', 
											array('verinformedeactividades', 'institucion'=>$institucion['id'])); ?>
								</td>	
								<td style="text-align:center;"><?php 
										echo ($institucion['Programa']=='0') ? 
											'<span class="label label-important"><i class="icon-remove icon-white"></i></span>' : 
											CHtml::link('<span class="label label-success"><i class="icon-ok icon-white"></i></span>', 
											array('verprogramas', 'institucion'=>$institucion['id'])); ?>
								</td>
								<td style="text-align:center;"><?php 
										echo ($institucion['Presupuesto']=='0') ? 
											'<span class="label label-important"><i class="icon-remove icon-white"></i></span>' : 
											CHtml::link('<span class="label label-success"><i class="icon-ok icon-white"></i></span>',
												array('institucion/verpresupuesto', 'institucion'=>$institucion['id']));?>
								</td>
							</tr>
						<?php 
							$contador++;
						} ?>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>