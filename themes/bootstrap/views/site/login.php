<?php
$this->pageCaption='Iniciar Sesión';
$this->pageTitle=Yii::app()->name . ' - ' . $this->pageCaption;
$this->pageDescription="";
$this->breadcrumbs=array(
	'Iniciar Sesión',
);
?>

<div class="form">
<?php $form=$this->beginWidget('BActiveForm', array(
	'id'=>'login-form',
	'enableClientValidation'=>true,
	'clientOptions'=>array(
		'validateOnSubmit'=>true,
	),
)); ?>

	<?php $this->widget('BAlert',array(
		'content'=>'<p>Campos con <span class="required">*</span> son requeridos.</p>',
	)); ?>
	
	<div class="<?php echo $form->fieldClass($model, 'username'); ?>">
		<?php echo $form->labelEx($model,'username'); ?>
		<div class="controls">
			<?php echo $form->textField($model,'username'); ?>
			<?php echo $form->error($model,'username'); ?>
		</div>
	</div>

	<div class="<?php echo $form->fieldClass($model, 'password'); ?>">
		<?php echo $form->labelEx($model,'password'); ?>
		<div class="controls">
			<?php echo $form->passwordField($model,'password'); ?>
			<?php echo $form->error($model,'password'); ?>
		</div>
	</div>

	<div class="<?php echo $form->fieldClass($model, 'rememberMe'); ?>">
		<div class="controls">
			<?php echo $form->checkBox($model,'rememberMe'); ?>
			<?php echo $form->error($model,'rememberMe'); ?>
		</div>
	</div>

	<div class="form-actions">
		<?php echo BHtml::submitButton('Iniciar Sesión',array('class'=>'btn btn-info btn-large')); ?>
	</div>

<?php $this->endWidget(); ?>
</div><!-- form -->
