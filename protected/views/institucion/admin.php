<?php
	$this->pageCaption='Administrar IAPs';
	$this->pageTitle=Yii::app()->name . ' - ' . $this->pageCaption;
	$this->pageDescription='';
	$this->breadcrumbs=array(
		'Crear',
	);

	$this->menu=array(
		array('label'=>'Volver ', 'url'=>array('site/index')),
	);
	
	?>
<p>
Puedes opcionalmente jugar con los operadores de comparación (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
o <b>=</b>) al principio de cada valor de búsqueda para especificar como la comparación debería ser hecha.
</p>
<?php $this->widget('zii.widgets.grid.CGridView', array(
		'id'=>'institucion-grid',
		'dataProvider'=>$model->search(),
		'filter'=>$model,
		'cssFile'=>Yii::app()->getAssetManager()->publish(Yii::getPathOfAlias('ext.bootstrap-theme.widgets.assets')).'/gridview/styles.css',
		'itemsCssClass'=>'table  table-striped',
		'columns'=>array(
		'id',
		'nombre',
		'rfc',
		/*
		'siglas',
		'mision',
		'vision',
		'domicioDireccion',
		'domicilioCP',
		*/
		array(	'name'=>'domicilioMunicipio_aid',
		       	'value'=>'$data->domicilioMunicipio->nombre',
		       	'filter'=>CHtml::listData(Municipio::model()->findAll(), 'id', 'nombre'),),
		/*
		'contactoFax',
		'fechaConstitucion_dt',
		'fechaTransformacion_dt',
		
		'donativoDeducible',
		'donativoConvenio',
		*/
		'cluni',
		array(	'name'=>'ambito_did',
		       'value'=>'$data->ambito->nombre',
		       'filter'=>CHtml::listData(Ambito::model()->findAll(), 'id', 'nombre'),),
		array(	'name'=>'actividadPreponderante_did',
		       'value'=>'$data->actividadPreponderante->nombre',
		       'filter'=>CHtml::listData(ActividadPreponderante::model()->findAll(), 'id', 'nombre'),),
		array(	'name'=>'estatus_did',
		       'value'=>'$data->estatus->nombre',
		       'filter'=>CHtml::listData(Estatus::model()->findAll(), 'id', 'nombre'),),
		array(
		'class'=>'CButtonColumn',
		),
	),
)); ?>