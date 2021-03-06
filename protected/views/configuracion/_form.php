<div class="form">

<?php $form=$this->beginWidget('BActiveForm', array(
	'id'=>'configuracion-form',
	'enableAjaxValidation'=>false,
)); ?>

	<?php $this->widget('BAlert',array(

		'content'=>'<p>Los campos marcados con <span class="required">*</span> son requeridos.</p>'
	)); ?>

	<?php echo $form->errorSummary($model); ?>

	<div class="<?php echo $form->fieldClass($model, 'ejercicioFiscal_did'); ?>">
		<?php echo $form->labelEx($model,'ejercicioFiscal_did'); ?>
		<div class="input">
			
			<?php echo $form->dropDownList($model,'ejercicioFiscal_did',CHtml::listData(EjercicioFiscal::model()->findAll(), 'id', 'nombre')); ?>
			<?php echo $form->error($model,'ejercicioFiscal_did'); ?>
		</div>
	</div>

	<div class="<?php echo $form->fieldClass($model, 'fechaInicioEdicion'); ?>">
		<?php echo $form->labelEx($model,'fechaInicioEdicion'); ?>
		<div class="input">
			
			<?php echo $form->textField($model,'fechaInicioEdicion'); ?>
			<?php echo $form->error($model,'fechaInicioEdicion'); ?>
		</div>
	</div>

	<div class="<?php echo $form->fieldClass($model, 'fechaFinalEdicion'); ?>">
		<?php echo $form->labelEx($model,'fechaFinalEdicion'); ?>
		<div class="input">
			
			<?php echo $form->textField($model,'fechaFinalEdicion'); ?>
			<?php echo $form->error($model,'fechaFinalEdicion'); ?>
		</div>
	</div>

	<div class="<?php echo $form->fieldClass($model, 'estatus_did'); ?>">
		<?php echo $form->labelEx($model,'estatus_did'); ?>
		<div class="input">
			
			<?php echo $form->dropDownList($model,'estatus_did',CHtml::listData(Estatus::model()->findAll(), 'id', 'nombre')); ?>
			<?php echo $form->error($model,'estatus_did'); ?>
		</div>
	</div>

	<div class="actions">
		<?php echo BHtml::submitButton($model->isNewRecord ? 'Crear' : 'Guardar'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->
