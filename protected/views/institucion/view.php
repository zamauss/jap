<?php
$this->pageCaption=$model->nombre;
$this->pageTitle=Yii::app()->name . ' - ' . $this->pageCaption;
$this->pageDescription='';
$this->breadcrumbs=array(
	Institucion::classNameLabel()=>array('index'),
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

if($model->donativoConvenio == 1)
	$donativo = 'Nacional';
else if($model->donativoConvenio == 2)
	$donativo = 'Nacional/Extranjera';
else
	$donativo = 'No';
?>	

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'baseScriptUrl'=>false,
	'cssFile'=>false,
	'htmlOptions'=>array('class'=>'table table-bordered table-striped'),
	'attributes'=>array(
		'id',
		'nombre',
		'siglas',
		'mision',
		'vision',
		'domicilioCalle',
		'domicilioColonia',
		'domicilioCP',
		array(	'name'=>'domicilioMunicipio_aid',
		        'value'=>$model->domicilioMunicipio->nombre,),
		'contactoTelefono',
		'contactoEmail',
		'fechaConstitucion_dt',
		'fechaTransformacion_dt',
		'rfc',
		'paginaWeb',
		array(	'name'=>'actividadPreponderante_did',
		        'value'=>$model->actividadPreponderante->nombre),
        array(
             'label'=>'Dictaminas',
              'value'=>$model->dictaminas == 0 ? 'No' : 'Si'),
		array(
             'label'=>'Donataria',
              'value'=>$model->donativoDeducible == 0 ? 'No' : 'Si'),
		array(
             'label'=>'Convenio',
              'value'=>$donativo),
		'cluni',
		array(	'name'=>'ambito_did',
		        'value'=>$model->ambito->nombre,),
		array(	'name'=>'areageografica_did',
		        'value'=>$model->areageografica->nombre,),
		array(	'name'=>'estatus_did',
		        'value'=>$model->estatus->nombre,),
	),
)); ?>
