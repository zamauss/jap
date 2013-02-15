<?php
$this->pageCaption='Ver '.$model->institucion->nombre;
$this->pageTitle=Yii::app()->name . ' - ' . $this->pageCaption;
$this->pageDescription='';
$this->breadcrumbs=array(
	Usuario::classNameLabel()=>array('institucion/acciones'),
	$model->id,
);

$this->menu=array(
		array('label'=>'Inicio', 'url'=>array('institucion/acciones')),
);
?>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'baseScriptUrl'=>false,
	'cssFile'=>false,
	'htmlOptions'=>array('class'=>'table table-bordered table-striped'),
	'attributes'=>array(
		array(	'name'=>'institucion_aid',
		        'value'=>$model->institucion->nombre,),
		'usuario',
		array(	'name'=>'password',
		        'value'=>'******',),
	),
)); ?>
