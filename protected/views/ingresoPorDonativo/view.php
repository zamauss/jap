<?php
$this->pageCaption='Ver '.IngresoPorDonativo::classNameLabel().' #'.$model->id;
$this->pageTitle=Yii::app()->name . ' - ' . $this->pageCaption;
$this->pageDescription='';
$this->breadcrumbs=array(
	IngresoPorDonativo::classNameLabel()=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'Listar '.IngresoPorDonativo::classNameLabel(), 'url'=>array('index')),
	array('label'=>'Crear '. IngresoPorDonativo::classNameLabel(), 'url'=>array('create')),
	array('label'=>'Actualizar '. IngresoPorDonativo::classNameLabel(), 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Eliminar '. IngresoPorDonativo::classNameLabel(), 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'¿Estas seguro que quieres eliminar este elemento?')),
	array('label'=>'Administrar '.IngresoPorDonativo::classNameLabel(), 'url'=>array('admin')),
);
?>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'baseScriptUrl'=>false,
	'cssFile'=>false,
	'htmlOptions'=>array('class'=>'table table-bordered table-striped'),
	'attributes'=>array(
		'id',
		'personaFisica',
		'personaMoral',
		'fundacionesNacionales',
		'fundacionesExtrajeras',
		'fondosGubernamentales',
		'especie',
		array(	'name'=>'institucion_aid',
		        'value'=>$model->institucion->nombre,),
		array(	'name'=>'ejercicioFiscal_did',
		        'value'=>$model->ejercicioFiscal->nombre,),
		array(	'name'=>'estatus_did',
		        'value'=>$model->estatus->nombre,),
		'editable',
		'ultimaModificacion_dt',
	),
)); ?>
