<div class="form">

<?php $form=$this->beginWidget('BActiveForm', array(
	'id'=>'programa-de-trabajo-form',
	'enableAjaxValidation'=>false,
)); ?>

	<?php $this->widget('BAlert',array(

		'content'=>'<p>Los campos marcados con <span class="required">*</span> son requeridos.</p>'
	)); ?>

	<?php echo $form->errorSummary($model); ?>

	<div class="<?php echo $form->fieldClass($model, 'ejercicio_fiscal_id'); ?>">
		<?php echo $form->labelEx($model,'ejercicio_fiscal_id'); ?>
		<div class="input">
			
			<?php echo $form->dropDownList($model,'ejercicio_fiscal_id',CHtml::listData(EjercicioFiscal::model()->findAll(), 'id', 'nombre')); ?>
			<?php echo $form->error($model,'ejercicio_fiscal_id'); ?>
		</div>
	</div>

	<div class="<?php echo $form->fieldClass($model, 'reviso_nombre'); ?>">
		<?php echo $form->labelEx($model,'reviso_nombre'); ?>
		<div class="input">
			
			<?php echo $form->textField($model,'reviso_nombre',array('size'=>60,'maxlength'=>145)); ?>
			<?php echo $form->error($model,'reviso_nombre'); ?>
		</div>
	</div>

	<div class="<?php echo $form->fieldClass($model, 'reviso_puesto'); ?>">
		<?php echo $form->labelEx($model,'reviso_puesto'); ?>
		<div class="input">
			
			<?php echo $form->textField($model,'reviso_puesto',array('size'=>60,'maxlength'=>145)); ?>
			<?php echo $form->error($model,'reviso_puesto'); ?>
		</div>
	</div>

	<div class="<?php echo $form->fieldClass($model, 'autorizo_nombre'); ?>">
		<?php echo $form->labelEx($model,'autorizo_nombre'); ?>
		<div class="input">
			
			<?php echo $form->textField($model,'autorizo_nombre',array('size'=>60,'maxlength'=>145)); ?>
			<?php echo $form->error($model,'autorizo_nombre'); ?>
		</div>
	</div>

	<div class="<?php echo $form->fieldClass($model, 'autorizo_puesto'); ?>">
		<?php echo $form->labelEx($model,'autorizo_puesto'); ?>
		<div class="input">
			
			<?php echo $form->textField($model,'autorizo_puesto',array('size'=>60,'maxlength'=>145)); ?>
			<?php echo $form->error($model,'autorizo_puesto'); ?>
		</div>
	</div>

	<div class="<?php echo $form->fieldClass($model, 'editable'); ?>">
		<?php echo $form->labelEx($model,'editable'); ?>
		<div class="input">
			
			<?php echo $form->textField($model,'editable'); ?>
			<?php echo $form->error($model,'editable'); ?>
		</div>
	</div>

	<div class="<?php echo $form->fieldClass($model, 'estatus_id'); ?>">
		<?php echo $form->labelEx($model,'estatus_id'); ?>
		<div class="input">
			
			<?php echo $form->dropDownList($model,'estatus_id',CHtml::listData(Estatus::model()->findAll(), 'id', 'nombre')); ?>
			<?php echo $form->error($model,'estatus_id'); ?>
		</div>
	</div>

	<div class="<?php echo $form->fieldClass($model, 'institucion_id'); ?>">
		<?php echo $form->labelEx($model,'institucion_id'); ?>
		<div class="input">
			
			<?php echo $form->dropDownList($model,'institucion_id',CHtml::listData(Institucion::model()->findAll(), 'id', 'nombre')); ?>
			<?php echo $form->error($model,'institucion_id'); ?>
		</div>
	</div>

	<div class="actions">
		<?php echo BHtml::submitButton($model->isNewRecord ? 'Crear' : 'Guardar'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->
