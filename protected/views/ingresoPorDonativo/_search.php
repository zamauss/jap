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
		<?php echo $form->label($model,'personaFisica'); ?>
		<div class="input">
			
			<?php echo $form->textField($model,'personaFisica'); ?>
		</div>
	</div>

	<div class="clearfix">
		<?php echo $form->label($model,'personaMoral'); ?>
		<div class="input">
			
			<?php echo $form->textField($model,'personaMoral'); ?>
		</div>
	</div>

	<div class="clearfix">
		<?php echo $form->label($model,'fundacionesNacionales'); ?>
		<div class="input">
			
			<?php echo $form->textField($model,'fundacionesNacionales'); ?>
		</div>
	</div>

	<div class="clearfix">
		<?php echo $form->label($model,'fundacionesExtrajeras'); ?>
		<div class="input">
			
			<?php echo $form->textField($model,'fundacionesExtrajeras'); ?>
		</div>
	</div>

	<div class="clearfix">
		<?php echo $form->label($model,'fondosGubernamentales'); ?>
		<div class="input">
			
			<?php echo $form->textField($model,'fondosGubernamentales'); ?>
		</div>
	</div>

	<div class="clearfix">
		<?php echo $form->label($model,'especie'); ?>
		<div class="input">
			
			<?php echo $form->textField($model,'especie'); ?>
		</div>
	</div>

	<div class="clearfix">
		<?php echo $form->label($model,'institucion_aid'); ?>
		<div class="input">
			
			<?php echo  ''; ?> <?php $this->widget('ext.custom.widgets.EJuiAutoCompleteFkField', array(
						'model'=>$model, 
						'attribute'=>'institucion_aid', 
						'sourceUrl'=>Yii::app()->createUrl('institucion/autocompletesearch'), 
						'showFKField'=>false,
						'relName'=>'institucion', // the relation name defined above
						'displayAttr'=>'nombre',  // attribute or pseudo-attribute to display
						
						'options'=>array(
							'minLength'=>1, 
						),
					)); ?>
		</div>
	</div>

	<div class="clearfix">
		<?php echo $form->label($model,'ejercicioFiscal_did'); ?>
		<div class="input">
			
			<?php echo $form->dropDownList($model,'ejercicioFiscal_did',CHtml::listData(EjercicioFiscal::model()->findAll(), 'id', 'nombre')); ?>
		</div>
	</div>

	<div class="clearfix">
		<?php echo $form->label($model,'estatus_did'); ?>
		<div class="input">
			
			<?php echo $form->dropDownList($model,'estatus_did',CHtml::listData(Estatus::model()->findAll(), 'id', 'nombre')); ?>
		</div>
	</div>

	<div class="clearfix">
		<?php echo $form->label($model,'editable'); ?>
		<div class="input">
			
			<?php echo $form->textField($model,'editable'); ?>
		</div>
	</div>

	<div class="clearfix">
		<?php echo $form->label($model,'ultimaModificacion_dt'); ?>
		<div class="input">
			
			<?php echo $form->textField($model,'ultimaModificacion_dt'); ?>
		</div>
	</div>

	<div class="actions">
		<?php echo BHtml::submitButton('Buscar'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->
