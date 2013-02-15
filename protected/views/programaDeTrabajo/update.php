<?php
$this->pageCaption='Actualizar '.ProgramaDeTrabajo::classNameLabel().' '.$model->id;
$this->pageTitle=Yii::app()->name . ' - ' . $this->pageCaption;
$this->pageDescription='';
$this->breadcrumbs=array(
	ProgramaDeTrabajo::classNameLabel()=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Actualizar',
);

$this->menu=array(
	array('label'=>'Listar '.ProgramaDeTrabajo::classNameLabel(), 'url'=>array('index')),
	array('label'=>'Crear '. ProgramaDeTrabajo::classNameLabel(), 'url'=>array('create')),
	array('label'=>'Ver '. ProgramaDeTrabajo::classNameLabel(), 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Administrar '. ProgramaDeTrabajo::classNameLabel(), 'url'=>array('admin')),
);
?>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>