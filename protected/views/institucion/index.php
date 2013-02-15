<?php
$this->pageCaption='Lista de Instituciones';
$this->pageTitle=Yii::app()->name . ' - ' . $this->pageCaption;
$this->pageDescription='';
$this->breadcrumbs=array(
	Institucion::classNameLabel(),
);
$usuarioActual = Usuario::model()->find('usuario=:x', array(':x'=>Yii::app()->user->name));
if($usuarioActual->tipousuario->nombre == "Administrador"){
	$this->menu=array(
		array('label'=>'Crear Institución', 'url'=>array('create')),
		array('label'=>'Filtrar Institución', 'url'=>array('admin')),
		array('label'=>'Administrar', 'url'=>array('admin')),
	);
}
else
{
	$this->menu=array(
		array('label'=>'Crear Institución', 'url'=>array('create')),
		array('label'=>'Filtrar Institución', 'url'=>array('admin')),
	);
}
?>

<?php $this->widget('ext.custom.widgets.CCustomListView', array(
	'dataProvider'=>$dataProvider,
	'headersview' =>'_headersview',
	'footersview' => '_footersview',
	'itemView'=>'_view',
)); ?>
