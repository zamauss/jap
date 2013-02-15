<?php
	$this->pageCaption='Bienvenido JAP';
	$this->pageTitle='Inicio';
	$this->pageDescription='';
	$this->breadcrumbs=array(
		'Administrador',
	);
?>
<div class="well">
		<?php echo CHtml::button(' Ver panorama general', 
		array('submit' => array('institucion/cuadrogeneral'), 
		'class'=>'btn btn-large btn-primary', 'style'=>'width:100%; font-size:12pt;'));  ?>
	</div>
<div class="row">
	<div style="width:100%; text-align:center">			
		<div class="span4">
			<ul class="thumbnails">
			<li class="span4">
				<div class="thumbnail">				
				<img src="<?php echo Yii::app()->baseUrl . '/images/filtros.png'; ?>" alt="iap"/>
					<div class="caption">
						<h3>Filtrar las IAP</h3>
						<p style="text-align:left">Verás el listado de IAPs que han hecho lo siguiente:</p>
						<p style="text-align:left">Presupuesto de Ingresos<br/>
						Presupuesto de Egresos<br/>
						Inventario</p>
						<p>
							<?php echo CHtml::button('Ir', array('submit' => array('institucion/admin'),'class'=>'btn btn-large btn-primary','style'=>'width:100%')); ?>
						</p>
					</div>
				</div>
			</li>
			<ul>
		</div>
		<div class="span4">
			<ul class="thumbnails">
			<li class="span4">
				<div class="thumbnail">				
				<img src="<?php echo Yii::app()->baseUrl . '/images/graficas.png'; ?>" alt="iap"/>
					<div class="caption">
						<h3>Graficar la Información</h3>
						<p style="text-align:left">Verás el listado de IAPs que han hecho lo siguiente:</p>
						<p style="text-align:left">Presupuesto de Ingresos<br/>
						Presupuesto de Egresos<br/>
						Inventario</p>
						<p>
							<?php echo CHtml::button('Ir', array('submit' => array('institucion/graficas'),'class'=>'btn btn-large btn-primary','style'=>'width:100%')); ?>
						</p>
					</div>
				</div>
			</li>
			<ul>
		</div>
		<div class="span4">
			<ul class="thumbnails">
			<li class="span4">
				<div class="thumbnail">				
				<img src="<?php echo Yii::app()->baseUrl . '/images/reportes.png'; ?>" alt="iap"/>
					<div class="caption">
						<h3>Reportear la Información</h3>
						<p style="text-align:left">Verás el listado de IAPs que han hecho lo siguiente:</p>
						<p style="text-align:left">Presupuesto de Ingresos<br/>
						Presupuesto de Egresos<br/>
						Inventario</p>
						<p>
							<?php echo CHtml::button('Ir', array('submit' => array('institucion/reportes'),'class'=>'btn btn-large btn-primary','style'=>'width:100%')); ?>
						</p>
					</div>
				</div>
			</li>
			<ul>
		</div>	   
	</div>
</div>