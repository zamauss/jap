<?php
$this->pageCaption='Ver '.ActividadPreponderante::classNameLabel().' #'.$model->id;
$this->pageTitle=Yii::app()->name . ' - ' . $this->pageCaption;
$this->pageDescription='';
$this->breadcrumbs=array(
	ActividadPreponderante::classNameLabel()=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'Listar '.ActividadPreponderante::classNameLabel(), 'url'=>array('index')),
	array('label'=>'Crear '. ActividadPreponderante::classNameLabel(), 'url'=>array('create')),
	array('label'=>'Actualizar '. ActividadPreponderante::classNameLabel(), 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Eliminar '. ActividadPreponderante::classNameLabel(), 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'¿Estas seguro que quieres eliminar este elemento?')),
	array('label'=>'Administrar '.ActividadPreponderante::classNameLabel(), 'url'=>array('admin')),
);
?>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'baseScriptUrl'=>false,
	'cssFile'=>false,
	'htmlOptions'=>array('class'=>'table table-bordered table-striped'),
	'attributes'=>array(
		'id',
		'nombre',
		array(	'name'=>'ambito_did',
		        'value'=>$model->ambito->nombre,),
	),
)); ?>
