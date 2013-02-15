<?php
$this->pageCaption='Actualizar '.Usuario::classNameLabel().' '.$model->usuario;
$this->pageTitle=Yii::app()->name . ' - ' . $this->pageCaption;
$this->pageDescription='';
$this->breadcrumbs=array(
	Usuario::classNameLabel(),
	'Actualizar',
);

$this->menu=array(
	array('label'=>'Inicio', 'url'=>array('institucion/acciones')),
);
?>

<?php echo $this->renderPartial('_formPerfil', array('model'=>$model)); ?>