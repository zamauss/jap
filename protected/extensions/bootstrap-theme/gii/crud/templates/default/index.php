<?php
/**
 * The following variables are available in this template:
 * - $this: the CrudCode object
 */
?>
<?php
echo "<?php\n";
//$label=$this->class2name($this->modelClass);
$label="$this->modelClass::classNameLabel()";
echo "\$this->pageCaption=$label;
\$this->pageTitle=Yii::app()->name . ' - ' . \$this->pageCaption;
\$this->pageDescription='Listar '. $label ;
\$this->breadcrumbs=array(
	$label,
);\n";
?>

$this->menu=array(
	array('label'=>'Crear '.<?php echo $label; ?>, 'url'=>array('create')),
	array('label'=>'Administrar '.<?php echo $label; ?>, 'url'=>array('admin')),
);
?>

<?php echo "<?php"; ?> $this->widget('ext.custom.widgets.CCustomListView', array(
	'dataProvider'=>$dataProvider,
	'headersview' =>'_headersview',
	'footersview' => '_footersview',
	'itemView'=>'_view',
)); ?>
