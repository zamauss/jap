<?php
$this->pageCaption='Administrar '.Informe::classNameLabel();
$this->pageTitle=Yii::app()->name . ' - ' . $this->pageCaption;
$this->pageDescription='Administrar '.Informe::classNameLabel();
$this->breadcrumbs=array(
	Informe::classNameLabel()=>array('index'),
	'Administrar',
);

$this->menu=array(
	array('label'=>'Listar '.Informe::classNameLabel(), 'url'=>array('index')),
	array('label'=>'Crear '.Informe::classNameLabel(), 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('informe-grid', {
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
	'id'=>'informe-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'cssFile'=>Yii::app()->getAssetManager()->publish(Yii::getPathOfAlias('ext.bootstrap-theme.widgets.assets')).'/gridview/styles.css',
	'itemsCssClass'=>'table  table-striped',
	'columns'=>array(
		'id',
		'numeroPersonasNomina',
		'numeroPersonasAsimilables',
		'numeroPersonasProfesionales',
		'numeroPersonasVoluntarias',
		'numeroPersonasPrestadoresSS',
		/*
		'numeroPersonasTotales',
		'numeroBeneficiariosTotales',
		'numeroBeneficiariosNinosH',
		'numeroBeneficiariosNinosM',
		'numeroBeneficiariosJovenesH',
		'numeroBeneficiariosJovenesM',
		'numeroBeneficiariosAdultosH',
		'numeroBeneficiariosAdultosM',
		'numeroBeneficiariosMayorH',
		'numeroBeneficiariosMayorM',
		'numeroBeneficiariosIndirectos',
		'nombreProgramaUno',
		'nombreProgramaDos',
		'nombreProgramaTres',
		'nombreProgramaCuatro',
		'nombreProgramaCinco',
		'horasVoluntariosProgramaUno',
		'horasVoluntariosProgramaDos',
		'horasVoluntariosProgramaTres',
		'horasVoluntariosProgramaCuatro',
		'horasVoluntariosProgramaCinco',
		'nombreConvocatoriaUno',
		'nombreConvocatoriaDos',
		'nombreConvocatoriaTres',
		'nombreConvocatoriaCuatro',
		'nombreConvocatoriaCinco',
		'nombreConvocatoriaSeis',
		'nombreConvocatoriaSiete',
		'nombreConvocatoriaOcho',
		'nombreConvocatoriaNueve',
		'nombreConvocatoriaDiez',
		'aprovadaConvocatoriaUno',
		'aprovadaConvocatoriaDos',
		'aprovadaConvocatoriaTres',
		'aprovadaConvocatoriaCuatro',
		'aprovadaConvocatoriaCinco',
		'aprovadaConvocatoriaSeis',
		'aprovadaConvocatoriaSiete',
		'aprovadaConvocatoriaOcho',
		'aprovadaConvocatoriaNueve',
		'aprovadaConvocatoriaDiez',
		'periodico',
		'radio',
		'espectaculares',
		'informeImpreso',
		'revistas',
		'television',
		'folletos',
		'redesSociales',
		'paginaWeb',
		'otros',
		'ninguna',
		'institucion_aid',
		'ejercicioFiscal_did',
		'estatus_did',
		'editable',
		'ultimaModificacion_dt',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
