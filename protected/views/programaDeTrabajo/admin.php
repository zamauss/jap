<?php
$this->pageCaption='Administrar '.ProgramaDeTrabajo::classNameLabel();
$this->pageTitle=Yii::app()->name . ' - ' . $this->pageCaption;
$this->pageDescription='Administrar '.ProgramaDeTrabajo::classNameLabel();
$this->breadcrumbs=array(
	ProgramaDeTrabajo::classNameLabel()=>array('index'),
	'Administrar',
);

$this->menu=array(
	array('label'=>'Listar '.ProgramaDeTrabajo::classNameLabel(), 'url'=>array('index')),
	array('label'=>'Crear '.ProgramaDeTrabajo::classNameLabel(), 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('programa-de-trabajo-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>



<?php echo CHtml::link('Busqueda Avanzada','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'programa-de-trabajo-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'cssFile'=>Yii::app()->getAssetManager()->publish(Yii::getPathOfAlias('ext.bootstrap-theme.widgets.assets')).'/gridview/styles.css',
	'itemsCssClass'=>'table  table-striped',
	'columns'=>array(
		'id',
		array(	'name'=>'ejercicio_fiscal_id',
		        'value'=>'$data->ejercicio->nombre',
			    'filter'=>CHtml::listData(EjercicioFiscal::model()->findAll(), 'id', 'nombre'),),
		'reviso_nombre',
		'reviso_puesto',
		'autorizo_nombre',
		'autorizo_puesto',
		/*
		'editable',
		array(	'name'=>'estatus_id',
		        'value'=>'$data->estatus->nombre',
			    'filter'=>CHtml::listData(Estatus::model()->findAll(), 'id', 'nombre'),),
		array(	'name'=>'institucion_id',
		        'value'=>'$data->institucion->nombre',
			    'filter'=>CHtml::listData(Institucion::model()->findAll(), 'id', 'nombre'),),
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
