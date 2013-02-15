<?php
$this->pageCaption='Actualizar '.ActividadPreponderante::classNameLabel().' '.$model->id;
$this->pageTitle=Yii::app()->name . ' - ' . $this->pageCaption;
$this->pageDescription='';
$this->breadcrumbs=array(
	ActividadPreponderante::classNameLabel()=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Actualizar',
);

$this->menu=array(
	array('label'=>'Listar '.ActividadPreponderante::classNameLabel(), 'url'=>array('index')),
	array('label'=>'Crear '. ActividadPreponderante::classNameLabel(), 'url'=>array('create')),
	array('label'=>'Ver '. ActividadPreponderante::classNameLabel(), 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Administrar '. ActividadPreponderante::classNameLabel(), 'url'=>array('admin')),
);
?>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>