<?php
$this->pageCaption=Informe::classNameLabel();
$this->pageTitle=Yii::app()->name . ' - ' . $this->pageCaption;
$this->pageDescription='Listar '. Informe::classNameLabel() ;
$this->breadcrumbs=array(
	Informe::classNameLabel(),
);

$this->menu=array(
	array('label'=>'Crear '.Informe::classNameLabel(), 'url'=>array('create')),
	array('label'=>'Administrar '.Informe::classNameLabel(), 'url'=>array('admin')),
);
?>

<?php $this->widget('ext.custom.widgets.CCustomListView', array(
	'dataProvider'=>$dataProvider,
	'headersview' =>'_headersview',
	'footersview' => '_footersview',
	'itemView'=>'_view',
)); ?>
