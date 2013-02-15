<?php
$this->pageCaption='Presupuesto ' . date('Y');
$this->pageTitle=Yii::app()->name . ' - ' . $this->pageCaption;
$this->pageDescription='';
$this->breadcrumbs=array(
	'Presupuesto',
	'Actualizar',
);

$this->menu=array(
	array('label'=>'Volver ', 'url'=>array('site/index')),
);
?>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>