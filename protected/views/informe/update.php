<?php
$this->pageCaption='Actualizar '.Informe::classNameLabel().' '.$model->id;
$this->pageTitle=Yii::app()->name . ' - ' . $this->pageCaption;
$this->pageDescription='';
$this->breadcrumbs=array(
	Informe::classNameLabel()=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Actualizar',
);

$this->menu=array(
	array('label'=>'Listar '.Informe::classNameLabel(), 'url'=>array('index')),
	array('label'=>'Crear '. Informe::classNameLabel(), 'url'=>array('create')),
	array('label'=>'Ver '. Informe::classNameLabel(), 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Administrar '. Informe::classNameLabel(), 'url'=>array('admin')),
);
?>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>