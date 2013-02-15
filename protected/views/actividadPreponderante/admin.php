<?php
$this->pageCaption='Administrar '.ActividadPreponderante::classNameLabel();
$this->pageTitle=Yii::app()->name . ' - ' . $this->pageCaption;
$this->pageDescription='Administrar '.ActividadPreponderante::classNameLabel();
$this->breadcrumbs=array(
	ActividadPreponderante::classNameLabel()=>array('index'),
	'Administrar',
);

$this->menu=array(
	array('label'=>'Listar '.ActividadPreponderante::classNameLabel(), 'url'=>array('index')),
	array('label'=>'Crear '.ActividadPreponderante::classNameLabel(), 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('actividad-preponderante-grid', {
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
	'id'=>'actividad-preponderante-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'cssFile'=>Yii::app()->getAssetManager()->publish(Yii::getPathOfAlias('ext.bootstrap-theme.widgets.assets')).'/gridview/styles.css',
	'itemsCssClass'=>'table  table-striped',
	'columns'=>array(
		'id',
		'nombre',
		array(	'name'=>'ambito_did',
		        'value'=>'$data->ambito->nombre',
			    'filter'=>CHtml::listData(Ambito::model()->findAll(), 'id', 'nombre'),),
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
