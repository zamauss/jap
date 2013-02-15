<?php
	$this->pageCaption='Programa de trabajo '.$programaTrabajo->ejercicioFiscal->nombre;
	$this->pageTitle=Yii::app()->name . ' - ' . $this->pageCaption;
	$this->pageDescription='';
	$this->breadcrumbs=array(
		'Crear',
	);

	$this->menu=array(
		array('label'=>'Volver ', 'url'=>array('site/index')),
	);
?>


<?php 

	echo $this->renderPartial('_programa', array(
			'model'=>$programa,
			'programaTrabajo'=>$programaTrabajo,
			'jsonprogs'=>$jsonprogs,
		)); 

?>


