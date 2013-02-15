<div class="wide form">

<?php $form=$this->beginWidget('BActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="clearfix">
		<?php echo $form->label($model,'id'); ?>
		<div class="input">
			
			<?php echo $form->textField($model,'id',array('size'=>11,'maxlength'=>11)); ?>
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
		<?php echo $form->label($model,'fundacionesExtranjeras'); ?>
		<div class="input">
			
			<?php echo $form->textField($model,'fundacionesExtranjeras'); ?>
		</div>
	</div>

	<div class="clearfix">
		<?php echo $form->label($model,'fondosGubernamentalesMunicipal'); ?>
		<div class="input">
			
			<?php echo $form->textField($model,'fondosGubernamentalesMunicipal'); ?>
		</div>
	</div>

	<div class="clearfix">
		<?php echo $form->label($model,'fondosGubernamentalesEstatal'); ?>
		<div class="input">
			
			<?php echo $form->textField($model,'fondosGubernamentalesEstatal'); ?>
		</div>
	</div>

	<div class="clearfix">
		<?php echo $form->label($model,'fondosGubernamentalesFederal'); ?>
		<div class="input">
			
			<?php echo $form->textField($model,'fondosGubernamentalesFederal'); ?>
		</div>
	</div>

	<div class="clearfix">
		<?php echo $form->label($model,'especie'); ?>
		<div class="input">
			
			<?php echo $form->textField($model,'especie'); ?>
		</div>
	</div>

	<div class="clearfix">
		<?php echo $form->label($model,'colectas'); ?>
		<div class="input">
			
			<?php echo $form->textField($model,'colectas'); ?>
		</div>
	</div>

	<div class="clearfix">
		<?php echo $form->label($model,'eventos'); ?>
		<div class="input">
			
			<?php echo $form->textField($model,'eventos'); ?>
		</div>
	</div>

	<div class="clearfix">
		<?php echo $form->label($model,'rifas'); ?>
		<div class="input">
			
			<?php echo $form->textField($model,'rifas'); ?>
		</div>
	</div>

	<div class="clearfix">
		<?php echo $form->label($model,'conferencias'); ?>
		<div class="input">
			
			<?php echo $form->textField($model,'conferencias'); ?>
		</div>
	</div>

	<div class="clearfix">
		<?php echo $form->label($model,'importeCuotas'); ?>
		<div class="input">
			
			<?php echo $form->textField($model,'importeCuotas'); ?>
		</div>
	</div>

	<div class="clearfix">
		<?php echo $form->label($model,'gaSueldos'); ?>
		<div class="input">
			
			<?php echo $form->textField($model,'gaSueldos'); ?>
		</div>
	</div>

	<div class="clearfix">
		<?php echo $form->label($model,'gaHonorarios'); ?>
		<div class="input">
			
			<?php echo $form->textField($model,'gaHonorarios'); ?>
		</div>
	</div>

	<div class="clearfix">
		<?php echo $form->label($model,'gaCombustibles'); ?>
		<div class="input">
			
			<?php echo $form->textField($model,'gaCombustibles'); ?>
		</div>
	</div>

	<div class="clearfix">
		<?php echo $form->label($model,'gaLuzTelefono'); ?>
		<div class="input">
			
			<?php echo $form->textField($model,'gaLuzTelefono'); ?>
		</div>
	</div>

	<div class="clearfix">
		<?php echo $form->label($model,'gaPapeleria'); ?>
		<div class="input">
			
			<?php echo $form->textField($model,'gaPapeleria'); ?>
		</div>
	</div>

	<div class="clearfix">
		<?php echo $form->label($model,'gaImpuestosDerechos'); ?>
		<div class="input">
			
			<?php echo $form->textField($model,'gaImpuestosDerechos'); ?>
		</div>
	</div>

	<div class="clearfix">
		<?php echo $form->label($model,'gaAsimilables'); ?>
		<div class="input">
			
			<?php echo $form->textField($model,'gaAsimilables'); ?>
		</div>
	</div>

	<div class="clearfix">
		<?php echo $form->label($model,'gaOtros'); ?>
		<div class="input">
			
			<?php echo $form->textField($model,'gaOtros'); ?>
		</div>
	</div>

	<div class="clearfix">
		<?php echo $form->label($model,'goSueldos'); ?>
		<div class="input">
			
			<?php echo $form->textField($model,'goSueldos'); ?>
		</div>
	</div>

	<div class="clearfix">
		<?php echo $form->label($model,'goHonorarios'); ?>
		<div class="input">
			
			<?php echo $form->textField($model,'goHonorarios'); ?>
		</div>
	</div>

	<div class="clearfix">
		<?php echo $form->label($model,'goCombustibles'); ?>
		<div class="input">
			
			<?php echo $form->textField($model,'goCombustibles'); ?>
		</div>
	</div>

	<div class="clearfix">
		<?php echo $form->label($model,'goLuzTelefono'); ?>
		<div class="input">
			
			<?php echo $form->textField($model,'goLuzTelefono'); ?>
		</div>
	</div>

	<div class="clearfix">
		<?php echo $form->label($model,'goPapeleria'); ?>
		<div class="input">
			
			<?php echo $form->textField($model,'goPapeleria'); ?>
		</div>
	</div>

	<div class="clearfix">
		<?php echo $form->label($model,'goRenta'); ?>
		<div class="input">
			
			<?php echo $form->textField($model,'goRenta'); ?>
		</div>
	</div>

	<div class="clearfix">
		<?php echo $form->label($model,'goImpuestosDerechos'); ?>
		<div class="input">
			
			<?php echo $form->textField($model,'goImpuestosDerechos'); ?>
		</div>
	</div>

	<div class="clearfix">
		<?php echo $form->label($model,'goAsimilables'); ?>
		<div class="input">
			
			<?php echo $form->textField($model,'goAsimilables'); ?>
		</div>
	</div>

	<div class="clearfix">
		<?php echo $form->label($model,'goOtros'); ?>
		<div class="input">
			
			<?php echo $form->textField($model,'goOtros'); ?>
		</div>
	</div>

	<div class="clearfix">
		<?php echo $form->label($model,'terrenos'); ?>
		<div class="input">
			
			<?php echo $form->textField($model,'terrenos'); ?>
		</div>
	</div>

	<div class="clearfix">
		<?php echo $form->label($model,'inmuebles'); ?>
		<div class="input">
			
			<?php echo $form->textField($model,'inmuebles'); ?>
		</div>
	</div>

	<div class="clearfix">
		<?php echo $form->label($model,'equipoOficina'); ?>
		<div class="input">
			
			<?php echo $form->textField($model,'equipoOficina'); ?>
		</div>
	</div>

	<div class="clearfix">
		<?php echo $form->label($model,'vehiculosServicio'); ?>
		<div class="input">
			
			<?php echo $form->textField($model,'vehiculosServicio'); ?>
		</div>
	</div>

	<div class="clearfix">
		<?php echo $form->label($model,'vehiculosAdministrativos'); ?>
		<div class="input">
			
			<?php echo $form->textField($model,'vehiculosAdministrativos'); ?>
		</div>
	</div>

	<div class="clearfix">
		<?php echo $form->label($model,'otros'); ?>
		<div class="input">
			
			<?php echo $form->textField($model,'otros'); ?>
		</div>
	</div>

	<div class="clearfix">
		<?php echo $form->label($model,'inversionesBancos'); ?>
		<div class="input">
			
			<?php echo $form->textField($model,'inversionesBancos'); ?>
		</div>
	</div>

	<div class="clearfix">
		<?php echo $form->label($model,'promocion'); ?>
		<div class="input">
			
			<?php echo $form->textField($model,'promocion'); ?>
		</div>
	</div>

	<div class="clearfix">
		<?php echo $form->label($model,'ejercicioFiscal_did'); ?>
		<div class="input">
			
			<?php echo $form->dropDownList($model,'ejercicioFiscal_did',CHtml::listData(EjercicioFiscal::model()->findAll(), 'id', 'nombre')); ?>
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
		<?php echo $form->label($model,'estatus_did'); ?>
		<div class="input">
			
			<?php echo $form->dropDownList($model,'estatus_did',CHtml::listData(Estatus::model()->findAll(), 'id', 'nombre')); ?>
		</div>
	</div>

	<div class="actions">
		<?php echo BHtml::submitButton('Buscar'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->
