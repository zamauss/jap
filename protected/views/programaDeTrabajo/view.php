<?php
$this->pageCaption='Programa de Trabajo';
$this->pageTitle=Yii::app()->name . ' - ' . $this->pageCaption;
$this->pageDescription=$model->institucion->nombre. "({$model->ejercicioFiscal->nombre}).";
$this->breadcrumbs=array(
	ProgramaDeTrabajo::classNameLabel()=>array('index'),
	$model->id,
);


?>

<?php
$this->pageCaption='Programas';
$this->pageTitle=Yii::app()->name . ' - ' . $this->pageCaption;
$this->pageDescription='';
$this->breadcrumbs=array(
	'Crear',
);

$this->menu=array(
	array('label'=>'Volver ', 'url'=>array('institucion/cuadrogeneral')),
	array('label'=>'Imprimir ', 'url'=>array('programaDeTrabajo/reporteprogramas','institucion'=>$_GET['institucion'])),
);

$info = Informe::model()->find('institucion_aid = ' . $_GET['institucion']);
//Ingresos
$donativo = IngresoPorDonativo::model()->find('institucion_aid = ' . $_GET['institucion']);
$cuotaRecuperacion = IngresoPorCuotasdeRecuperacion::model()->find('institucion_aid = ' . $_GET['institucion']);
$evento = IngresoPorEvento::model()->find('institucion_aid = ' . $_GET['institucion']);
$inversion = Inversion::model()->find('institucion_aid = ' . $_GET['institucion']);
//gastos
$gastosAdmon = GastoDeAdministracion::model()->find('institucion_aid = ' . $_GET['institucion']);
$gastosOperativos = GastoOperativo::model()->find('institucion_aid = ' . $_GET['institucion']);
?>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'baseScriptUrl'=>false,
	'cssFile'=>false,
	'htmlOptions'=>array('class'=>'table table-bordered table-striped'),
	'attributes'=>array(
		'id',
		array(	'name'=>'ejercicio_fiscal_id',
		        'value'=>$model->ejercicioFiscal->nombre,),
		'reviso_nombre',
		'reviso_puesto',
		'autorizo_nombre',
		'autorizo_puesto',
		'editable',
		array(	'name'=>'estatus_id',
		        'value'=>$model->estatus->nombre,),
		array(	'name'=>'institucion_id',
		        'value'=>$model->institucion->nombre,),
	),
)); ?>


<?php $this->widget('ext.custom.widgets.CCustomListView', array(
	'dataProvider'=>$dataProvider,
	'headersview' =>'_headersprogramaview',
	'footersview' => '_footersprogramaview',
	'itemView'=>'_programaview',
)); ?>
