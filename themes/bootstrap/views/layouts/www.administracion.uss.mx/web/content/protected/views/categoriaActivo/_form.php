<div class="form">

<?php $form=$this->beginWidget('BActiveForm', array(
	'id'=>'categoria-activo-form',
	'enableAjaxValidation'=>false,
)); ?>

	<?php $this->widget('BAlert',array(

		'content'=>'<p>Los campos marcados con <span class="required">*</span> son requeridos.</p>'
	)); ?>

	<?php echo $form->errorSummary($model); ?>

	<div class="<?php echo $form->fieldClass($model, 'nombre'); ?>">
		<?php echo $form->labelEx($model,'nombre'); ?>
		<div class="input">
			
			<?php echo $form->textField($model,'nombre',array('size'=>60,'maxlength'=>100)); ?>
			<?php echo $form->error($model,'nombre'); ?>
		</div>
	</div>

	<div class="<?php echo $form->fieldClass($model, 'tipoActivo_did'); ?>">
		<?php echo $form->labelEx($model,'tipoActivo_did'); ?>
		<div class="input">
			
			<?php echo $form->dropDownList($model,'tipoActivo_did',CHtml::listData(TipoActivo::model()->findAll(), 'id', 'nombre')); ?>			<?php echo $form->error($model,'tipoActivo_did'); ?>
		</div>
	</div>

	<div class="actions">
		<?php echo BHtml::submitButton($model->isNewRecord ? 'Crear' : 'Guardar'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->
