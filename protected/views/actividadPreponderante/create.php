<?php
$this->pageCaption='Crear '. ActividadPreponderante::classNameLabel();
$this->pageTitle=Yii::app()->name . ' - ' . $this->pageCaption;
$this->pageDescription='Crear nuevo '.ActividadPreponderante::classNameLabel();
$this->breadcrumbs=array(
	ActividadPreponderante::classNameLabel()=>array('index'),
	'Crear',
);

$this->menu=array(
	array('label'=>'Listar '.ActividadPreponderante::classNameLabel(), 'url'=>array('index')),
	array('label'=>'Administrar '.ActividadPreponderante::classNameLabel(), 'url'=>array('admin')),
);
?>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>