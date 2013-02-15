<?php
$this->pageCaption='Presupuesto ' . date('Y');
$this->pageTitle=Yii::app()->name . ' - ' . $this->pageCaption;
$this->pageDescription='';
$this->breadcrumbs=array(
	'Crear',
);

	$this->menu=array(
		array('label'=>'Volver ', 'url'=>array('site/index')),
	);
?>


<?php echo $this->renderPartial('_presupuesto', array(
'modelPresupuesto'=>$modelPresupuesto,
)); ?>