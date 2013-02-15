<?php
$this->pageCaption='Actualizar ';
$this->pageTitle=Yii::app()->name . ' - ' . $this->pageCaption;
$this->pageDescription='';
$this->breadcrumbs=array(
	'Usuario',
	'Actualizar',
);

$this->menu=array(
	array('label'=>'Listar '.Usuario::classNameLabel(), 'url'=>array('index')),
	array('label'=>'Crear '. Usuario::classNameLabel(), 'url'=>array('create')),
	array('label'=>'Ver '. Usuario::classNameLabel(), 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Administrar '. Usuario::classNameLabel(), 'url'=>array('admin')),
);
?>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>