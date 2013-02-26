<?php
$this->pageCaption='Administrar '.Estado::classNameLabel();
$this->pageTitle=Yii::app()->name . ' - ' . $this->pageCaption;
$this->pageDescription='Administrar '.Estado::classNameLabel();
$this->breadcrumbs=array(
	Estado::classNameLabel()=>array('index'),
	'Administrar',
);

$this->menu=array(
	array('label'=>'Listar '.Estado::classNameLabel(), 'url'=>array('index')),
	array('label'=>'Crear '.Estado::classNameLabel(), 'url'=>array('create')),
);
1
Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('estado-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>



<?php echo CHtml::link('Búsqueda Avanzada','#',array('class'=>'btn btn-success')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'estado-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'cssFile'=>Yii::app()->getAssetManager()->publish(Yii::getPathOfAlias('ext.bootstrap-theme.widgets.assets')).'/gridview/styles.css',
	'itemsCssClass'=>'table  table-striped',
	'columns'=>array(
		'id',
		'clave',
		'nombre',
		array(	'name'=>'estatus_did',
		        'value'=>'$data->estatus->nombre',
			    'filter'=>CHtml::listData(Estatus::model()->findAll(), 'id', 'nombre'),),
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
