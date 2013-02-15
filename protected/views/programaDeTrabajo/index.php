<?php
$this->pageCaption=ProgramaDeTrabajo::classNameLabel();
$this->pageTitle=Yii::app()->name . ' - ' . $this->pageCaption;
$this->pageDescription='Listar '. ProgramaDeTrabajo::classNameLabel() ;
$this->breadcrumbs=array(
	ProgramaDeTrabajo::classNameLabel(),
);

$this->menu=array(
	array('label'=>'Crear '.ProgramaDeTrabajo::classNameLabel(), 'url'=>array('create')),
	array('label'=>'Administrar '.ProgramaDeTrabajo::classNameLabel(), 'url'=>array('admin')),
);
?>

<?php $this->widget('ext.custom.widgets.CCustomListView', array(
	'dataProvider'=>$dataProvider,
	'headersview' =>'_headersview',
	'footersview' => '_footersview',
	'itemView'=>'_view',
)); ?>
