<?php
$this->pageCaption='Ver '.Presupuesto::classNameLabel().' de '.$model->institucion->nombre;
$this->pageTitle=Yii::app()->name . ' - ' . $this->pageCaption;
$this->pageDescription='';
$this->breadcrumbs=array(
	$model->id,
);
$usuarioActual = Usuario::model()->find('usuario=:x',array(':x'=>Yii::app()->user->name));
if($usuarioActual->tipousuario->nombre == 'Administrador')
{
	$this->menu=array(
		array('label'=>'Volver ', 'url'=>array('institucion/cuadrogeneral')),
);	
}
else
{
	$this->menu=array(
		array('label'=>'Inicio', 'url'=>array('site/index'))
	);

}

?>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'baseScriptUrl'=>false,
	'cssFile'=>false,
	'htmlOptions'=>array('class'=>'table table-bordered table-striped'),
	'attributes'=>array(
		'id',
		'personaFisica',
		'personaMoral',
		'fundacionesNacionales',
		'fundacionesExtranjeras',
		'fondosGubernamentalesMunicipal',
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
		'equipoTransporte',
		'otros',
		'inversionesBancos',
		'promocion',
		array(	'name'=>'ejercicioFiscal_did',
		        'value'=>$model->ejercicioFiscal->nombre,),
		array(	'name'=>'institucion_aid',
		        'value'=>$model->institucion->nombre,),
		array(	'name'=>'estatus_did',
		        'value'=>$model->estatus->nombre,),
	),
)); ?>
