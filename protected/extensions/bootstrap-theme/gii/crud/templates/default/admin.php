<?php
/**
 * The following variables are available in this template:
 * - $this: the CrudCode object
 */
 $stringkey=Yii::app()->modules['gii']['custom']['StringKey'];
?>
<?php
echo "<?php\n";
//$label=$this->class2name($this->modelClass);
$label="$this->modelClass::classNameLabel()";
echo "\$this->pageCaption='Administrar '.$label;
\$this->pageTitle=Yii::app()->name . ' - ' . \$this->pageCaption;
\$this->pageDescription='Administrar '.$label;
\$this->breadcrumbs=array(
	$label=>array('index'),
	'Administrar',
);\n";
?>

$this->menu=array(
	array('label'=>'Listar '.<?php echo $label; ?>, 'url'=>array('index')),
	array('label'=>'Crear '.<?php echo  $label; ?>, 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('<?php echo $this->class2id($this->modelClass); ?>-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>



<?php echo "<?php echo CHtml::link('Busqueda Avanzada','#',array('class'=>'search-button')); ?>"; ?>

<div class="search-form" style="display:none">
<?php echo "<?php \$this->renderPartial('_search',array(
	'model'=>\$model,
)); ?>\n"; ?>
</div><!-- search-form -->

<?php echo "<?php"; ?> $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'<?php echo $this->class2id($this->modelClass); ?>-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'cssFile'=>Yii::app()->getAssetManager()->publish(Yii::getPathOfAlias('ext.bootstrap-theme.widgets.assets')).'/gridview/styles.css',
	'itemsCssClass'=>'table  table-striped',
	'columns'=>array(
<?php
$count=0;
$modelo= new $this->modelClass;
foreach($this->tableSchema->columns as $column)
{
	if(++$count==7)
		echo "\t\t/*\n";
	$partes = explode('_',$column->name);
	$finalCampo=$partes[count($partes)-1];
	$relacion=$partes[0];
	$modeloColumna=ucwords($partes[0]);
	
	//print_r($this);
	
	if( $modelo->attributeIsDirectRelation($column->name))
		echo "\t\tarray(	'name'=>'{$column->name}',
		        'value'=>'\$data->{$relacion}->{$stringkey}',
			    'filter'=>CHtml::listData({$modelo->attributeDatatypeRelation($column->name)}::model()->findAll(), 'id', '{$stringkey}'),),\n";
	else
		echo "\t\t'".$column->name."',\n";
	/*
		array(	'name'=>'tipousuario_id',
		        'value'=>'$data->tipousuario->nombre',
			    'filter'=>CHtml::listData(TipoUsuario::model()->findAll(), 'id', 'nombre'),),
		*/
}
if($count>=7)
	echo "\t\t*/\n";
?>
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>