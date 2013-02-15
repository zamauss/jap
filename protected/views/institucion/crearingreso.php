<?php
$this->pageCaption='Informe de actividades ' . date('Y', strtotime('-1 year')) ;
$this->pageTitle=Yii::app()->name . ' - ' . $this->pageCaption;
$this->pageDescription='';
$this->breadcrumbs=array(
	'Crear',
);

	$this->menu=array(
		array('label'=>'Volver ', 'url'=>array('site/index')),
	);
?>


<?php echo $this->renderPartial('_presupuestoingreso', array(
'modelDonativo'=>$modelDonativo,
'modelIngresoPorCuotasDeRecuperacion'=>$modelIngresoPorCuotasDeRecuperacion,
'modelIngresoPorEvento'=>$modelIngresoPorEvento,
'modelGastoDeAdministracion'=>$modelGastoDeAdministracion,
'modelGastoOperativo'=>$modelGastoOperativo,
'modelInversion'=>$modelInversion,
'modelInforme'=>$modelInforme,
)); ?>