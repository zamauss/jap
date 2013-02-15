<?php
$this->pageCaption='Crear '. ProgramaDeTrabajo::classNameLabel();
$this->pageTitle=Yii::app()->name . ' - ' . $this->pageCaption;
$this->pageDescription='Crear nuevo '.ProgramaDeTrabajo::classNameLabel();
$this->breadcrumbs=array(
	ProgramaDeTrabajo::classNameLabel()=>array('index'),
	'Crear',
);

$this->menu=array(
	array('label'=>'Listar '.ProgramaDeTrabajo::classNameLabel(), 'url'=>array('index')),
	array('label'=>'Administrar '.ProgramaDeTrabajo::classNameLabel(), 'url'=>array('admin')),
);
?>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>