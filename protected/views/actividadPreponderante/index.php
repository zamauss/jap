<?php
$this->pageCaption='Actividad Preponderante';
$this->pageTitle=Yii::app()->name . ' - ' . $this->pageCaption;
$this->pageDescription='Listar actividades';
$this->breadcrumbs=array(
	ActividadPreponderante::classNameLabel(),
);

$this->menu=array(
	array('label'=>'Crear '.ActividadPreponderante::classNameLabel(), 'url'=>array('create')),
	array('label'=>'Administrar '.ActividadPreponderante::classNameLabel(), 'url'=>array('admin')),
);
?>

<?php $this->widget('ext.custom.widgets.CCustomListView', array(
	'dataProvider'=>$dataProvider,
	'headersview' =>'_headersview',
	'footersview' => '_footersview',
	'itemView'=>'_view',
)); ?>
