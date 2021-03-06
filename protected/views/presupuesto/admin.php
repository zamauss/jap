<?php
$this->pageCaption='Administrar '.Presupuesto::classNameLabel();
$this->pageTitle=Yii::app()->name . ' - ' . $this->pageCaption;
$this->pageDescription='Administrar '.Presupuesto::classNameLabel();
$this->breadcrumbs=array(
	Presupuesto::classNameLabel()=>array('index'),
	'Administrar',
);

$this->menu=array(
	array('label'=>'Listar '.Presupuesto::classNameLabel(), 'url'=>array('index')),
	array('label'=>'Crear '.Presupuesto::classNameLabel(), 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('presupuesto-grid', {
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
	'id'=>'presupuesto-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'cssFile'=>Yii::app()->getAssetManager()->publish(Yii::getPathOfAlias('ext.bootstrap-theme.widgets.assets')).'/gridview/styles.css',
	'itemsCssClass'=>'table  table-striped',
	'columns'=>array(
		'id',
		'personaFisica',
		'personaMoral',
		'fundacionesNacionales',
		'fundacionesExtranjeras',
		'fondosGubernamentalesMunicipal',
		/*
		'fondosGubernamentalesEstatal',
		'fondosGubernamentalesFederal',
		'especie',
		'colectas',
		'eventos',
		'rifas',
		'conferencias',
		'importeCuotas',
		'gaSueldos',
		'gaHonorarios',
		'gaCombustibles',
		'gaLuzTelefono',
		'gaPapeleria',
		'gaImpuestosDerechos',
		'gaAsimilables',
		'gaOtros',
		'goSueldos',
		'goHonorarios',
		'goCombustibles',
		'goLuzTelefono',
		'goPapeleria',
		'goRenta',
		'goImpuestosDerechos',
		'goAsimilables',
		'goOtros',
		'terrenos',
		'inmuebles',
		'equipoOficina',
		'vehiculosServicio',
		'vehiculosAdministrativos',
		'otros',
		'inversionesBancos',
		'promocion',
		array(	'name'=>'ejercicioFiscal_did',
		        'value'=>'$data->ejercicioFiscal->nombre',
			    'filter'=>CHtml::listData(EjercicioFiscal::model()->findAll(), 'id', 'nombre'),),
		array(	'name'=>'institucion_aid',
		        'value'=>'$data->institucion->nombre',
			    'filter'=>CHtml::listData(Institucion::model()->findAll(), 'id', 'nombre'),),
		array(	'name'=>'estatus_did',
		        'value'=>'$data->estatus->nombre',
			    'filter'=>CHtml::listData(Estatus::model()->findAll(), 'id', 'nombre'),),
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
