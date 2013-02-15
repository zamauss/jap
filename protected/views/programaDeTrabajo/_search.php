<div class="wide form">

<?php $form=$this->beginWidget('BActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="clearfix">
		<?php echo $form->label($model,'id'); ?>
		<div class="input">
			
			<?php echo $form->textField($model,'id'); ?>
		</div>
	</div>

	<div class="clearfix">
		<?php echo $form->label($model,'ejercicio_fiscal_id'); ?>
		<div class="input">
			
			<?php echo $form->dropDownList($model,'ejercicio_fiscal_id',CHtml::listData(EjercicioFiscal::model()->findAll(), 'id', 'nombre')); ?>
		</div>
	</div>

	<div class="clearfix">
		<?php echo $form->label($model,'reviso_nombre'); ?>
		<div class="input">
			
			<?php echo $form->textField($model,'reviso_nombre',array('size'=>60,'maxlength'=>145)); ?>
		</div>
	</div>

	<div class="clearfix">
		<?php echo $form->label($model,'reviso_puesto'); ?>
		<div class="input">
			
			<?php echo $form->textField($model,'reviso_puesto',array('size'=>60,'maxlength'=>145)); ?>
		</div>
	</div>

	<div class="clearfix">
		<?php echo $form->label($model,'autorizo_nombre'); ?>
		<div class="input">
			
			<?php echo $form->textField($model,'autorizo_nombre',array('size'=>60,'maxlength'=>145)); ?>
		</div>
	</div>

	<div class="clearfix">
		<?php echo $form->label($model,'autorizo_puesto'); ?>
		<div class="input">
			
			<?php echo $form->textField($model,'autorizo_puesto',array('size'=>60,'maxlength'=>145)); ?>
		</div>
	</div>

	<div class="clearfix">
		<?php echo $form->label($model,'editable'); ?>
		<div class="input">
			
			<?php echo $form->textField($model,'editable'); ?>
		</div>
	</div>

	<div class="clearfix">
		<?php echo $form->label($model,'estatus_id'); ?>
		<div class="input">
			
			<?php echo $form->dropDownList($model,'estatus_id',CHtml::listData(Estatus::model()->findAll(), 'id', 'nombre')); ?>
		</div>
	</div>

	<div class="clearfix">
		<?php echo $form->label($model,'institucion_id'); ?>
		<div class="input">
			
			<?php echo $form->dropDownList($model,'institucion_id',CHtml::listData(Institucion::model()->findAll(), 'id', 'nombre')); ?>
		</div>
	</div>

	<div class="actions">
		<?php echo BHtml::submitButton('Buscar'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->
