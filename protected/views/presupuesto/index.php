<?php
$this->pageCaption=Presupuesto::classNameLabel();
$this->pageTitle=Yii::app()->name . ' - ' . $this->pageCaption;
$this->pageDescription='Listar '. Presupuesto::classNameLabel() ;
$this->breadcrumbs=array(
	Presupuesto::classNameLabel(),
);

$this->menu=array(
	array('label'=>'Crear '.Presupuesto::classNameLabel(), 'url'=>array('create')),
	array('label'=>'Administrar '.Presupuesto::classNameLabel(), 'url'=>array('admin')),
);
?>

<?php $this->widget('ext.custom.widgets.CCustomListView', array(
	'dataProvider'=>$dataProvider,
	'headersview' =>'_headersview',
	'footersview' => '_footersview',
	'itemView'=>'_view',
)); ?>
