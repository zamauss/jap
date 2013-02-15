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
		<?php echo $form->label($model,'numeroPersonasNomina'); ?>
		<div class="input">
			
			<?php echo $form->textField($model,'numeroPersonasNomina'); ?>
		</div>
	</div>

	<div class="clearfix">
		<?php echo $form->label($model,'numeroPersonasAsimilables'); ?>
		<div class="input">
			
			<?php echo $form->textField($model,'numeroPersonasAsimilables'); ?>
		</div>
	</div>

	<div class="clearfix">
		<?php echo $form->label($model,'numeroPersonasProfesionales'); ?>
		<div class="input">
			
			<?php echo $form->textField($model,'numeroPersonasProfesionales'); ?>
		</div>
	</div>

	<div class="clearfix">
		<?php echo $form->label($model,'numeroPersonasVoluntarias'); ?>
		<div class="input">
			
			<?php echo $form->textField($model,'numeroPersonasVoluntarias'); ?>
		</div>
	</div>

	<div class="clearfix">
		<?php echo $form->label($model,'numeroPersonasPrestadoresSS'); ?>
		<div class="input">
			
			<?php echo $form->textField($model,'numeroPersonasPrestadoresSS'); ?>
		</div>
	</div>

	<div class="clearfix">
		<?php echo $form->label($model,'numeroPersonasTotales'); ?>
		<div class="input">
			
			<?php echo $form->textField($model,'numeroPersonasTotales'); ?>
		</div>
	</div>

	<div class="clearfix">
		<?php echo $form->label($model,'numeroBeneficiariosTotales'); ?>
		<div class="input">
			
			<?php echo $form->textField($model,'numeroBeneficiariosTotales'); ?>
		</div>
	</div>

	<div class="clearfix">
		<?php echo $form->label($model,'numeroBeneficiariosNinosH'); ?>
		<div class="input">
			
			<?php echo $form->textField($model,'numeroBeneficiariosNinosH'); ?>
		</div>
	</div>

	<div class="clearfix">
		<?php echo $form->label($model,'numeroBeneficiariosNinosM'); ?>
		<div class="input">
			
			<?php echo $form->textField($model,'numeroBeneficiariosNinosM'); ?>
		</div>
	</div>

	<div class="clearfix">
		<?php echo $form->label($model,'numeroBeneficiariosJovenesH'); ?>
		<div class="input">
			
			<?php echo $form->textField($model,'numeroBeneficiariosJovenesH'); ?>
		</div>
	</div>

	<div class="clearfix">
		<?php echo $form->label($model,'numeroBeneficiariosJovenesM'); ?>
		<div class="input">
			
			<?php echo $form->textField($model,'numeroBeneficiariosJovenesM'); ?>
		</div>
	</div>

	<div class="clearfix">
		<?php echo $form->label($model,'numeroBeneficiariosAdultosH'); ?>
		<div class="input">
			
			<?php echo $form->textField($model,'numeroBeneficiariosAdultosH'); ?>
		</div>
	</div>

	<div class="clearfix">
		<?php echo $form->label($model,'numeroBeneficiariosAdultosM'); ?>
		<div class="input">
			
			<?php echo $form->textField($model,'numeroBeneficiariosAdultosM'); ?>
		</div>
	</div>

	<div class="clearfix">
		<?php echo $form->label($model,'numeroBeneficiariosMayorH'); ?>
		<div class="input">
			
			<?php echo $form->textField($model,'numeroBeneficiariosMayorH'); ?>
		</div>
	</div>

	<div class="clearfix">
		<?php echo $form->label($model,'numeroBeneficiariosMayorM'); ?>
		<div class="input">
			
			<?php echo $form->textField($model,'numeroBeneficiariosMayorM'); ?>
		</div>
	</div>

	<div class="clearfix">
		<?php echo $form->label($model,'numeroBeneficiariosIndirectos'); ?>
		<div class="input">
			
			<?php echo $form->textField($model,'numeroBeneficiariosIndirectos'); ?>
		</div>
	</div>

	<div class="clearfix">
		<?php echo $form->label($model,'nombreProgramaUno'); ?>
		<div class="input">
			
			<?php echo $form->textField($model,'nombreProgramaUno',array('size'=>60,'maxlength'=>100)); ?>
		</div>
	</div>

	<div class="clearfix">
		<?php echo $form->label($model,'nombreProgramaDos'); ?>
		<div class="input">
			
			<?php echo $form->textField($model,'nombreProgramaDos',array('size'=>60,'maxlength'=>100)); ?>
		</div>
	</div>

	<div class="clearfix">
		<?php echo $form->label($model,'nombreProgramaTres'); ?>
		<div class="input">
			
			<?php echo $form->textField($model,'nombreProgramaTres',array('size'=>60,'maxlength'=>100)); ?>
		</div>
	</div>

	<div class="clearfix">
		<?php echo $form->label($model,'nombreProgramaCuatro'); ?>
		<div class="input">
			
			<?php echo $form->textField($model,'nombreProgramaCuatro',array('size'=>60,'maxlength'=>100)); ?>
		</div>
	</div>

	<div class="clearfix">
		<?php echo $form->label($model,'nombreProgramaCinco'); ?>
		<div class="input">
			
			<?php echo $form->textField($model,'nombreProgramaCinco',array('size'=>60,'maxlength'=>100)); ?>
		</div>
	</div>

	<div class="clearfix">
		<?php echo $form->label($model,'horasVoluntariosProgramaUno'); ?>
		<div class="input">
			
			<?php echo $form->textField($model,'horasVoluntariosProgramaUno'); ?>
		</div>
	</div>

	<div class="clearfix">
		<?php echo $form->label($model,'horasVoluntariosProgramaDos'); ?>
		<div class="input">
			
			<?php echo $form->textField($model,'horasVoluntariosProgramaDos'); ?>
		</div>
	</div>

	<div class="clearfix">
		<?php echo $form->label($model,'horasVoluntariosProgramaTres'); ?>
		<div class="input">
			
			<?php echo $form->textField($model,'horasVoluntariosProgramaTres'); ?>
		</div>
	</div>

	<div class="clearfix">
		<?php echo $form->label($model,'horasVoluntariosProgramaCuatro'); ?>
		<div class="input">
			
			<?php echo $form->textField($model,'horasVoluntariosProgramaCuatro'); ?>
		</div>
	</div>

	<div class="clearfix">
		<?php echo $form->label($model,'horasVoluntariosProgramaCinco'); ?>
		<div class="input">
			
			<?php echo $form->textField($model,'horasVoluntariosProgramaCinco'); ?>
		</div>
	</div>

	<div class="clearfix">
		<?php echo $form->label($model,'nombreConvocatoriaUno'); ?>
		<div class="input">
			
			<?php echo $form->textField($model,'nombreConvocatoriaUno',array('size'=>60,'maxlength'=>100)); ?>
		</div>
	</div>

	<div class="clearfix">
		<?php echo $form->label($model,'nombreConvocatoriaDos'); ?>
		<div class="input">
			
			<?php echo $form->textField($model,'nombreConvocatoriaDos',array('size'=>60,'maxlength'=>100)); ?>
		</div>
	</div>

	<div class="clearfix">
		<?php echo $form->label($model,'nombreConvocatoriaTres'); ?>
		<div class="input">
			
			<?php echo $form->textField($model,'nombreConvocatoriaTres',array('size'=>60,'maxlength'=>100)); ?>
		</div>
	</div>

	<div class="clearfix">
		<?php echo $form->label($model,'nombreConvocatoriaCuatro'); ?>
		<div class="input">
			
			<?php echo $form->textField($model,'nombreConvocatoriaCuatro',array('size'=>60,'maxlength'=>100)); ?>
		</div>
	</div>

	<div class="clearfix">
		<?php echo $form->label($model,'nombreConvocatoriaCinco'); ?>
		<div class="input">
			
			<?php echo $form->textField($model,'nombreConvocatoriaCinco',array('size'=>60,'maxlength'=>100)); ?>
		</div>
	</div>

	<div class="clearfix">
		<?php echo $form->label($model,'nombreConvocatoriaSeis'); ?>
		<div class="input">
			
			<?php echo $form->textField($model,'nombreConvocatoriaSeis',array('size'=>60,'maxlength'=>100)); ?>
		</div>
	</div>

	<div class="clearfix">
		<?php echo $form->label($model,'nombreConvocatoriaSiete'); ?>
		<div class="input">
			
			<?php echo $form->textField($model,'nombreConvocatoriaSiete',array('size'=>60,'maxlength'=>100)); ?>
		</div>
	</div>

	<div class="clearfix">
		<?php echo $form->label($model,'nombreConvocatoriaOcho'); ?>
		<div class="input">
			
			<?php echo $form->textField($model,'nombreConvocatoriaOcho',array('size'=>60,'maxlength'=>100)); ?>
		</div>
	</div>

	<div class="clearfix">
		<?php echo $form->label($model,'nombreConvocatoriaNueve'); ?>
		<div class="input">
			
			<?php echo $form->textField($model,'nombreConvocatoriaNueve',array('size'=>60,'maxlength'=>100)); ?>
		</div>
	</div>

	<div class="clearfix">
		<?php echo $form->label($model,'nombreConvocatoriaDiez'); ?>
		<div class="input">
			
			<?php echo $form->textField($model,'nombreConvocatoriaDiez',array('size'=>60,'maxlength'=>100)); ?>
		</div>
	</div>

	<div class="clearfix">
		<?php echo $form->label($model,'aprovadaConvocatoriaUno'); ?>
		<div class="input">
			
			<?php echo $form->textField($model,'aprovadaConvocatoriaUno'); ?>
		</div>
	</div>

	<div class="clearfix">
		<?php echo $form->label($model,'aprovadaConvocatoriaDos'); ?>
		<div class="input">
			
			<?php echo $form->textField($model,'aprovadaConvocatoriaDos'); ?>
		</div>
	</div>

	<div class="clearfix">
		<?php echo $form->label($model,'aprovadaConvocatoriaTres'); ?>
		<div class="input">
			
			<?php echo $form->textField($model,'aprovadaConvocatoriaTres'); ?>
		</div>
	</div>

	<div class="clearfix">
		<?php echo $form->label($model,'aprovadaConvocatoriaCuatro'); ?>
		<div class="input">
			
			<?php echo $form->textField($model,'aprovadaConvocatoriaCuatro'); ?>
		</div>
	</div>

	<div class="clearfix">
		<?php echo $form->label($model,'aprovadaConvocatoriaCinco'); ?>
		<div class="input">
			
			<?php echo $form->textField($model,'aprovadaConvocatoriaCinco'); ?>
		</div>
	</div>

	<div class="clearfix">
		<?php echo $form->label($model,'aprovadaConvocatoriaSeis'); ?>
		<div class="input">
			
			<?php echo $form->textField($model,'aprovadaConvocatoriaSeis'); ?>
		</div>
	</div>

	<div class="clearfix">
		<?php echo $form->label($model,'aprovadaConvocatoriaSiete'); ?>
		<div class="input">
			
			<?php echo $form->textField($model,'aprovadaConvocatoriaSiete'); ?>
		</div>
	</div>

	<div class="clearfix">
		<?php echo $form->label($model,'aprovadaConvocatoriaOcho'); ?>
		<div class="input">
			
			<?php echo $form->textField($model,'aprovadaConvocatoriaOcho'); ?>
		</div>
	</div>

	<div class="clearfix">
		<?php echo $form->label($model,'aprovadaConvocatoriaNueve'); ?>
		<div class="input">
			
			<?php echo $form->textField($model,'aprovadaConvocatoriaNueve'); ?>
		</div>
	</div>

	<div class="clearfix">
		<?php echo $form->label($model,'aprovadaConvocatoriaDiez'); ?>
		<div class="input">
			
			<?php echo $form->textField($model,'aprovadaConvocatoriaDiez'); ?>
		</div>
	</div>

	<div class="clearfix">
		<?php echo $form->label($model,'periodico'); ?>
		<div class="input">
			
			<?php echo $form->textField($model,'periodico'); ?>
		</div>
	</div>

	<div class="clearfix">
		<?php echo $form->label($model,'radio'); ?>
		<div class="input">
			
			<?php echo $form->textField($model,'radio'); ?>
		</div>
	</div>

	<div class="clearfix">
		<?php echo $form->label($model,'espectaculares'); ?>
		<div class="input">
			
			<?php echo $form->textField($model,'espectaculares'); ?>
		</div>
	</div>

	<div class="clearfix">
		<?php echo $form->label($model,'informeImpreso'); ?>
		<div class="input">
			
			<?php echo $form->textField($model,'informeImpreso'); ?>
		</div>
	</div>

	<div class="clearfix">
		<?php echo $form->label($model,'revistas'); ?>
		<div class="input">
			
			<?php echo $form->textField($model,'revistas'); ?>
		</div>
	</div>

	<div class="clearfix">
		<?php echo $form->label($model,'television'); ?>
		<div class="input">
			
			<?php echo $form->textField($model,'television'); ?>
		</div>
	</div>

	<div class="clearfix">
		<?php echo $form->label($model,'folletos'); ?>
		<div class="input">
			
			<?php echo $form->textField($model,'folletos'); ?>
		</div>
	</div>

	<div class="clearfix">
		<?php echo $form->label($model,'redesSociales'); ?>
		<div class="input">
			
			<?php echo $form->textField($model,'redesSociales'); ?>
		</div>
	</div>

	<div class="clearfix">
		<?php echo $form->label($model,'paginaWeb'); ?>
		<div class="input">
			
			<?php echo $form->textField($model,'paginaWeb'); ?>
		</div>
	</div>

	<div class="clearfix">
		<?php echo $form->label($model,'otros'); ?>
		<div class="input">
			
			<?php echo $form->textField($model,'otros'); ?>
		</div>
	</div>

	<div class="clearfix">
		<?php echo $form->label($model,'ninguna'); ?>
		<div class="input">
			
			<?php echo $form->textField($model,'ninguna'); ?>
		</div>
	</div>

	<div class="clearfix">
		<?php echo $form->label($model,'institucion_aid'); ?>
		<div class="input">
			
			<?php echo  ''; ?> <?php $this->widget('ext.custom.widgets.EJuiAutoCompleteFkField', array(
						'model'=>$model, 
						'attribute'=>'institucion_aid', 
						'sourceUrl'=>Yii::app()->createUrl('/autocompletesearch'), 
						'showFKField'=>false,
						'relName'=>'', // the relation name defined above
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
			
			<?php echo $form->dropDownList($model,'ejercicioFiscal_did',CHtml::listData(::model()->findAll(), 'id', 'nombre')); ?>
		</div>
	</div>

	<div class="clearfix">
		<?php echo $form->label($model,'estatus_did'); ?>
		<div class="input">
			
			<?php echo $form->dropDownList($model,'estatus_did',CHtml::listData(::model()->findAll(), 'id', 'nombre')); ?>
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
