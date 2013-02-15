<?php
$this->pageCaption='Crear '. Informe::classNameLabel();
$this->pageTitle=Yii::app()->name . ' - ' . $this->pageCaption;
$this->pageDescription='Crear nuevo '.Informe::classNameLabel();
$this->breadcrumbs=array(
	Informe::classNameLabel()=>array('index'),
	'Crear',
);

$this->menu=array(
	array('label'=>'Listar '.Informe::classNameLabel(), 'url'=>array('index')),
	array('label'=>'Administrar '.Informe::classNameLabel(), 'url'=>array('admin')),
);
?>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>