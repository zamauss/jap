<div class="form">

<?php $form=$this->beginWidget('BActiveForm', array(
	'id'=>'informe-form',
	'enableAjaxValidation'=>false,
)); ?>

	<?php $this->widget('BAlert',array(

		'content'=>'<p>Los campos marcados con <span class="required">*</span> son requeridos.</p>'
	)); ?>

	<?php echo $form->errorSummary($model); ?>

	<div class="<?php echo $form->fieldClass($model, 'numeroPersonasNomina'); ?>">
		<?php echo $form->labelEx($model,'numeroPersonasNomina'); ?>
		<div class="input">
			
			<?php echo $form->textField($model,'numeroPersonasNomina'); ?>
			<?php echo $form->error($model,'numeroPersonasNomina'); ?>
		</div>
	</div>

	<div class="<?php echo $form->fieldClass($model, 'numeroPersonasAsimilables'); ?>">
		<?php echo $form->labelEx($model,'numeroPersonasAsimilables'); ?>
		<div class="input">
			
			<?php echo $form->textField($model,'numeroPersonasAsimilables'); ?>
			<?php echo $form->error($model,'numeroPersonasAsimilables'); ?>
		</div>
	</div>

	<div class="<?php echo $form->fieldClass($model, 'numeroPersonasProfesionales'); ?>">
		<?php echo $form->labelEx($model,'numeroPersonasProfesionales'); ?>
		<div class="input">
			
			<?php echo $form->textField($model,'numeroPersonasProfesionales'); ?>
			<?php echo $form->error($model,'numeroPersonasProfesionales'); ?>
		</div>
	</div>

	<div class="<?php echo $form->fieldClass($model, 'numeroPersonasVoluntarias'); ?>">
		<?php echo $form->labelEx($model,'numeroPersonasVoluntarias'); ?>
		<div class="input">
			
			<?php echo $form->textField($model,'numeroPersonasVoluntarias'); ?>
			<?php echo $form->error($model,'numeroPersonasVoluntarias'); ?>
		</div>
	</div>

	<div class="<?php echo $form->fieldClass($model, 'numeroPersonasPrestadoresSS'); ?>">
		<?php echo $form->labelEx($model,'numeroPersonasPrestadoresSS'); ?>
		<div class="input">
			
			<?php echo $form->textField($model,'numeroPersonasPrestadoresSS'); ?>
			<?php echo $form->error($model,'numeroPersonasPrestadoresSS'); ?>
		</div>
	</div>

	<div class="<?php echo $form->fieldClass($model, 'numeroPersonasTotales'); ?>">
		<?php echo $form->labelEx($model,'numeroPersonasTotales'); ?>
		<div class="input">
			
			<?php echo $form->textField($model,'numeroPersonasTotales'); ?>
			<?php echo $form->error($model,'numeroPersonasTotales'); ?>
		</div>
	</div>

	<div class="<?php echo $form->fieldClass($model, 'numeroBeneficiariosTotales'); ?>">
		<?php echo $form->labelEx($model,'numeroBeneficiariosTotales'); ?>
		<div class="input">
			
			<?php echo $form->textField($model,'numeroBeneficiariosTotales'); ?>
			<?php echo $form->error($model,'numeroBeneficiariosTotales'); ?>
		</div>
	</div>

	<div class="<?php echo $form->fieldClass($model, 'numeroBeneficiariosNinosH'); ?>">
		<?php echo $form->labelEx($model,'numeroBeneficiariosNinosH'); ?>
		<div class="input">
			
			<?php echo $form->textField($model,'numeroBeneficiariosNinosH'); ?>
			<?php echo $form->error($model,'numeroBeneficiariosNinosH'); ?>
		</div>
	</div>

	<div class="<?php echo $form->fieldClass($model, 'numeroBeneficiariosNinosM'); ?>">
		<?php echo $form->labelEx($model,'numeroBeneficiariosNinosM'); ?>
		<div class="input">
			
			<?php echo $form->textField($model,'numeroBeneficiariosNinosM'); ?>
			<?php echo $form->error($model,'numeroBeneficiariosNinosM'); ?>
		</div>
	</div>

	<div class="<?php echo $form->fieldClass($model, 'numeroBeneficiariosJovenesH'); ?>">
		<?php echo $form->labelEx($model,'numeroBeneficiariosJovenesH'); ?>
		<div class="input">
			
			<?php echo $form->textField($model,'numeroBeneficiariosJovenesH'); ?>
			<?php echo $form->error($model,'numeroBeneficiariosJovenesH'); ?>
		</div>
	</div>

	<div class="<?php echo $form->fieldClass($model, 'numeroBeneficiariosJovenesM'); ?>">
		<?php echo $form->labelEx($model,'numeroBeneficiariosJovenesM'); ?>
		<div class="input">
			
			<?php echo $form->textField($model,'numeroBeneficiariosJovenesM'); ?>
			<?php echo $form->error($model,'numeroBeneficiariosJovenesM'); ?>
		</div>
	</div>

	<div class="<?php echo $form->fieldClass($model, 'numeroBeneficiariosAdultosH'); ?>">
		<?php echo $form->labelEx($model,'numeroBeneficiariosAdultosH'); ?>
		<div class="input">
			
			<?php echo $form->textField($model,'numeroBeneficiariosAdultosH'); ?>
			<?php echo $form->error($model,'numeroBeneficiariosAdultosH'); ?>
		</div>
	</div>

	<div class="<?php echo $form->fieldClass($model, 'numeroBeneficiariosAdultosM'); ?>">
		<?php echo $form->labelEx($model,'numeroBeneficiariosAdultosM'); ?>
		<div class="input">
			
			<?php echo $form->textField($model,'numeroBeneficiariosAdultosM'); ?>
			<?php echo $form->error($model,'numeroBeneficiariosAdultosM'); ?>
		</div>
	</div>

	<div class="<?php echo $form->fieldClass($model, 'numeroBeneficiariosMayorH'); ?>">
		<?php echo $form->labelEx($model,'numeroBeneficiariosMayorH'); ?>
		<div class="input">
			
			<?php echo $form->textField($model,'numeroBeneficiariosMayorH'); ?>
			<?php echo $form->error($model,'numeroBeneficiariosMayorH'); ?>
		</div>
	</div>

	<div class="<?php echo $form->fieldClass($model, 'numeroBeneficiariosMayorM'); ?>">
		<?php echo $form->labelEx($model,'numeroBeneficiariosMayorM'); ?>
		<div class="input">
			
			<?php echo $form->textField($model,'numeroBeneficiariosMayorM'); ?>
			<?php echo $form->error($model,'numeroBeneficiariosMayorM'); ?>
		</div>
	</div>

	<div class="<?php echo $form->fieldClass($model, 'numeroBeneficiariosIndirectos'); ?>">
		<?php echo $form->labelEx($model,'numeroBeneficiariosIndirectos'); ?>
		<div class="input">
			
			<?php echo $form->textField($model,'numeroBeneficiariosIndirectos'); ?>
			<?php echo $form->error($model,'numeroBeneficiariosIndirectos'); ?>
		</div>
	</div>

	<div class="<?php echo $form->fieldClass($model, 'nombreProgramaUno'); ?>">
		<?php echo $form->labelEx($model,'nombreProgramaUno'); ?>
		<div class="input">
			
			<?php echo $form->textField($model,'nombreProgramaUno',array('size'=>60,'maxlength'=>100)); ?>
			<?php echo $form->error($model,'nombreProgramaUno'); ?>
		</div>
	</div>

	<div class="<?php echo $form->fieldClass($model, 'nombreProgramaDos'); ?>">
		<?php echo $form->labelEx($model,'nombreProgramaDos'); ?>
		<div class="input">
			
			<?php echo $form->textField($model,'nombreProgramaDos',array('size'=>60,'maxlength'=>100)); ?>
			<?php echo $form->error($model,'nombreProgramaDos'); ?>
		</div>
	</div>

	<div class="<?php echo $form->fieldClass($model, 'nombreProgramaTres'); ?>">
		<?php echo $form->labelEx($model,'nombreProgramaTres'); ?>
		<div class="input">
			
			<?php echo $form->textField($model,'nombreProgramaTres',array('size'=>60,'maxlength'=>100)); ?>
			<?php echo $form->error($model,'nombreProgramaTres'); ?>
		</div>
	</div>

	<div class="<?php echo $form->fieldClass($model, 'nombreProgramaCuatro'); ?>">
		<?php echo $form->labelEx($model,'nombreProgramaCuatro'); ?>
		<div class="input">
			
			<?php echo $form->textField($model,'nombreProgramaCuatro',array('size'=>60,'maxlength'=>100)); ?>
			<?php echo $form->error($model,'nombreProgramaCuatro'); ?>
		</div>
	</div>

	<div class="<?php echo $form->fieldClass($model, 'nombreProgramaCinco'); ?>">
		<?php echo $form->labelEx($model,'nombreProgramaCinco'); ?>
		<div class="input">
			
			<?php echo $form->textField($model,'nombreProgramaCinco',array('size'=>60,'maxlength'=>100)); ?>
			<?php echo $form->error($model,'nombreProgramaCinco'); ?>
		</div>
	</div>

	<div class="<?php echo $form->fieldClass($model, 'horasVoluntariosProgramaUno'); ?>">
		<?php echo $form->labelEx($model,'horasVoluntariosProgramaUno'); ?>
		<div class="input">
			
			<?php echo $form->textField($model,'horasVoluntariosProgramaUno'); ?>
			<?php echo $form->error($model,'horasVoluntariosProgramaUno'); ?>
		</div>
	</div>

	<div class="<?php echo $form->fieldClass($model, 'horasVoluntariosProgramaDos'); ?>">
		<?php echo $form->labelEx($model,'horasVoluntariosProgramaDos'); ?>
		<div class="input">
			
			<?php echo $form->textField($model,'horasVoluntariosProgramaDos'); ?>
			<?php echo $form->error($model,'horasVoluntariosProgramaDos'); ?>
		</div>
	</div>

	<div class="<?php echo $form->fieldClass($model, 'horasVoluntariosProgramaTres'); ?>">
		<?php echo $form->labelEx($model,'horasVoluntariosProgramaTres'); ?>
		<div class="input">
			
			<?php echo $form->textField($model,'horasVoluntariosProgramaTres'); ?>
			<?php echo $form->error($model,'horasVoluntariosProgramaTres'); ?>
		</div>
	</div>

	<div class="<?php echo $form->fieldClass($model, 'horasVoluntariosProgramaCuatro'); ?>">
		<?php echo $form->labelEx($model,'horasVoluntariosProgramaCuatro'); ?>
		<div class="input">
			
			<?php echo $form->textField($model,'horasVoluntariosProgramaCuatro'); ?>
			<?php echo $form->error($model,'horasVoluntariosProgramaCuatro'); ?>
		</div>
	</div>

	<div class="<?php echo $form->fieldClass($model, 'horasVoluntariosProgramaCinco'); ?>">
		<?php echo $form->labelEx($model,'horasVoluntariosProgramaCinco'); ?>
		<div class="input">
			
			<?php echo $form->textField($model,'horasVoluntariosProgramaCinco'); ?>
			<?php echo $form->error($model,'horasVoluntariosProgramaCinco'); ?>
		</div>
	</div>

	<div class="<?php echo $form->fieldClass($model, 'nombreConvocatoriaUno'); ?>">
		<?php echo $form->labelEx($model,'nombreConvocatoriaUno'); ?>
		<div class="input">
			
			<?php echo $form->textField($model,'nombreConvocatoriaUno',array('size'=>60,'maxlength'=>100)); ?>
			<?php echo $form->error($model,'nombreConvocatoriaUno'); ?>
		</div>
	</div>

	<div class="<?php echo $form->fieldClass($model, 'nombreConvocatoriaDos'); ?>">
		<?php echo $form->labelEx($model,'nombreConvocatoriaDos'); ?>
		<div class="input">
			
			<?php echo $form->textField($model,'nombreConvocatoriaDos',array('size'=>60,'maxlength'=>100)); ?>
			<?php echo $form->error($model,'nombreConvocatoriaDos'); ?>
		</div>
	</div>

	<div class="<?php echo $form->fieldClass($model, 'nombreConvocatoriaTres'); ?>">
		<?php echo $form->labelEx($model,'nombreConvocatoriaTres'); ?>
		<div class="input">
			
			<?php echo $form->textField($model,'nombreConvocatoriaTres',array('size'=>60,'maxlength'=>100)); ?>
			<?php echo $form->error($model,'nombreConvocatoriaTres'); ?>
		</div>
	</div>

	<div class="<?php echo $form->fieldClass($model, 'nombreConvocatoriaCuatro'); ?>">
		<?php echo $form->labelEx($model,'nombreConvocatoriaCuatro'); ?>
		<div class="input">
			
			<?php echo $form->textField($model,'nombreConvocatoriaCuatro',array('size'=>60,'maxlength'=>100)); ?>
			<?php echo $form->error($model,'nombreConvocatoriaCuatro'); ?>
		</div>
	</div>

	<div class="<?php echo $form->fieldClass($model, 'nombreConvocatoriaCinco'); ?>">
		<?php echo $form->labelEx($model,'nombreConvocatoriaCinco'); ?>
		<div class="input">
			
			<?php echo $form->textField($model,'nombreConvocatoriaCinco',array('size'=>60,'maxlength'=>100)); ?>
			<?php echo $form->error($model,'nombreConvocatoriaCinco'); ?>
		</div>
	</div>

	<div class="<?php echo $form->fieldClass($model, 'nombreConvocatoriaSeis'); ?>">
		<?php echo $form->labelEx($model,'nombreConvocatoriaSeis'); ?>
		<div class="input">
			
			<?php echo $form->textField($model,'nombreConvocatoriaSeis',array('size'=>60,'maxlength'=>100)); ?>
			<?php echo $form->error($model,'nombreConvocatoriaSeis'); ?>
		</div>
	</div>

	<div class="<?php echo $form->fieldClass($model, 'nombreConvocatoriaSiete'); ?>">
		<?php echo $form->labelEx($model,'nombreConvocatoriaSiete'); ?>
		<div class="input">
			
			<?php echo $form->textField($model,'nombreConvocatoriaSiete',array('size'=>60,'maxlength'=>100)); ?>
			<?php echo $form->error($model,'nombreConvocatoriaSiete'); ?>
		</div>
	</div>

	<div class="<?php echo $form->fieldClass($model, 'nombreConvocatoriaOcho'); ?>">
		<?php echo $form->labelEx($model,'nombreConvocatoriaOcho'); ?>
		<div class="input">
			
			<?php echo $form->textField($model,'nombreConvocatoriaOcho',array('size'=>60,'maxlength'=>100)); ?>
			<?php echo $form->error($model,'nombreConvocatoriaOcho'); ?>
		</div>
	</div>

	<div class="<?php echo $form->fieldClass($model, 'nombreConvocatoriaNueve'); ?>">
		<?php echo $form->labelEx($model,'nombreConvocatoriaNueve'); ?>
		<div class="input">
			
			<?php echo $form->textField($model,'nombreConvocatoriaNueve',array('size'=>60,'maxlength'=>100)); ?>
			<?php echo $form->error($model,'nombreConvocatoriaNueve'); ?>
		</div>
	</div>

	<div class="<?php echo $form->fieldClass($model, 'nombreConvocatoriaDiez'); ?>">
		<?php echo $form->labelEx($model,'nombreConvocatoriaDiez'); ?>
		<div class="input">
			
			<?php echo $form->textField($model,'nombreConvocatoriaDiez',array('size'=>60,'maxlength'=>100)); ?>
			<?php echo $form->error($model,'nombreConvocatoriaDiez'); ?>
		</div>
	</div>

	<div class="<?php echo $form->fieldClass($model, 'aprovadaConvocatoriaUno'); ?>">
		<?php echo $form->labelEx($model,'aprovadaConvocatoriaUno'); ?>
		<div class="input">
			
			<?php echo $form->textField($model,'aprovadaConvocatoriaUno'); ?>
			<?php echo $form->error($model,'aprovadaConvocatoriaUno'); ?>
		</div>
	</div>

	<div class="<?php echo $form->fieldClass($model, 'aprovadaConvocatoriaDos'); ?>">
		<?php echo $form->labelEx($model,'aprovadaConvocatoriaDos'); ?>
		<div class="input">
			
			<?php echo $form->textField($model,'aprovadaConvocatoriaDos'); ?>
			<?php echo $form->error($model,'aprovadaConvocatoriaDos'); ?>
		</div>
	</div>

	<div class="<?php echo $form->fieldClass($model, 'aprovadaConvocatoriaTres'); ?>">
		<?php echo $form->labelEx($model,'aprovadaConvocatoriaTres'); ?>
		<div class="input">
			
			<?php echo $form->textField($model,'aprovadaConvocatoriaTres'); ?>
			<?php echo $form->error($model,'aprovadaConvocatoriaTres'); ?>
		</div>
	</div>

	<div class="<?php echo $form->fieldClass($model, 'aprovadaConvocatoriaCuatro'); ?>">
		<?php echo $form->labelEx($model,'aprovadaConvocatoriaCuatro'); ?>
		<div class="input">
			
			<?php echo $form->textField($model,'aprovadaConvocatoriaCuatro'); ?>
			<?php echo $form->error($model,'aprovadaConvocatoriaCuatro'); ?>
		</div>
	</div>

	<div class="<?php echo $form->fieldClass($model, 'aprovadaConvocatoriaCinco'); ?>">
		<?php echo $form->labelEx($model,'aprovadaConvocatoriaCinco'); ?>
		<div class="input">
			
			<?php echo $form->textField($model,'aprovadaConvocatoriaCinco'); ?>
			<?php echo $form->error($model,'aprovadaConvocatoriaCinco'); ?>
		</div>
	</div>

	<div class="<?php echo $form->fieldClass($model, 'aprovadaConvocatoriaSeis'); ?>">
		<?php echo $form->labelEx($model,'aprovadaConvocatoriaSeis'); ?>
		<div class="input">
			
			<?php echo $form->textField($model,'aprovadaConvocatoriaSeis'); ?>
			<?php echo $form->error($model,'aprovadaConvocatoriaSeis'); ?>
		</div>
	</div>

	<div class="<?php echo $form->fieldClass($model, 'aprovadaConvocatoriaSiete'); ?>">
		<?php echo $form->labelEx($model,'aprovadaConvocatoriaSiete'); ?>
		<div class="input">
			
			<?php echo $form->textField($model,'aprovadaConvocatoriaSiete'); ?>
			<?php echo $form->error($model,'aprovadaConvocatoriaSiete'); ?>
		</div>
	</div>

	<div class="<?php echo $form->fieldClass($model, 'aprovadaConvocatoriaOcho'); ?>">
		<?php echo $form->labelEx($model,'aprovadaConvocatoriaOcho'); ?>
		<div class="input">
			
			<?php echo $form->textField($model,'aprovadaConvocatoriaOcho'); ?>
			<?php echo $form->error($model,'aprovadaConvocatoriaOcho'); ?>
		</div>
	</div>

	<div class="<?php echo $form->fieldClass($model, 'aprovadaConvocatoriaNueve'); ?>">
		<?php echo $form->labelEx($model,'aprovadaConvocatoriaNueve'); ?>
		<div class="input">
			
			<?php echo $form->textField($model,'aprovadaConvocatoriaNueve'); ?>
			<?php echo $form->error($model,'aprovadaConvocatoriaNueve'); ?>
		</div>
	</div>

	<div class="<?php echo $form->fieldClass($model, 'aprovadaConvocatoriaDiez'); ?>">
		<?php echo $form->labelEx($model,'aprovadaConvocatoriaDiez'); ?>
		<div class="input">
			
			<?php echo $form->textField($model,'aprovadaConvocatoriaDiez'); ?>
			<?php echo $form->error($model,'aprovadaConvocatoriaDiez'); ?>
		</div>
	</div>

	<div class="<?php echo $form->fieldClass($model, 'periodico'); ?>">
		<?php echo $form->labelEx($model,'periodico'); ?>
		<div class="input">
			
			<?php echo $form->textField($model,'periodico'); ?>
			<?php echo $form->error($model,'periodico'); ?>
		</div>
	</div>

	<div class="<?php echo $form->fieldClass($model, 'radio'); ?>">
		<?php echo $form->labelEx($model,'radio'); ?>
		<div class="input">
			
			<?php echo $form->textField($model,'radio'); ?>
			<?php echo $form->error($model,'radio'); ?>
		</div>
	</div>

	<div class="<?php echo $form->fieldClass($model, 'espectaculares'); ?>">
		<?php echo $form->labelEx($model,'espectaculares'); ?>
		<div class="input">
			
			<?php echo $form->textField($model,'espectaculares'); ?>
			<?php echo $form->error($model,'espectaculares'); ?>
		</div>
	</div>

	<div class="<?php echo $form->fieldClass($model, 'informeImpreso'); ?>">
		<?php echo $form->labelEx($model,'informeImpreso'); ?>
		<div class="input">
			
			<?php echo $form->textField($model,'informeImpreso'); ?>
			<?php echo $form->error($model,'informeImpreso'); ?>
		</div>
	</div>

	<div class="<?php echo $form->fieldClass($model, 'revistas'); ?>">
		<?php echo $form->labelEx($model,'revistas'); ?>
		<div class="input">
			
			<?php echo $form->textField($model,'revistas'); ?>
			<?php echo $form->error($model,'revistas'); ?>
		</div>
	</div>

	<div class="<?php echo $form->fieldClass($model, 'television'); ?>">
		<?php echo $form->labelEx($model,'television'); ?>
		<div class="input">
			
			<?php echo $form->textField($model,'television'); ?>
			<?php echo $form->error($model,'television'); ?>
		</div>
	</div>

	<div class="<?php echo $form->fieldClass($model, 'folletos'); ?>">
		<?php echo $form->labelEx($model,'folletos'); ?>
		<div class="input">
			
			<?php echo $form->textField($model,'folletos'); ?>
			<?php echo $form->error($model,'folletos'); ?>
		</div>
	</div>

	<div class="<?php echo $form->fieldClass($model, 'redesSociales'); ?>">
		<?php echo $form->labelEx($model,'redesSociales'); ?>
		<div class="input">
			
			<?php echo $form->textField($model,'redesSociales'); ?>
			<?php echo $form->error($model,'redesSociales'); ?>
		</div>
	</div>

	<div class="<?php echo $form->fieldClass($model, 'paginaWeb'); ?>">
		<?php echo $form->labelEx($model,'paginaWeb'); ?>
		<div class="input">
			
			<?php echo $form->textField($model,'paginaWeb'); ?>
			<?php echo $form->error($model,'paginaWeb'); ?>
		</div>
	</div>

	<div class="<?php echo $form->fieldClass($model, 'otros'); ?>">
		<?php echo $form->labelEx($model,'otros'); ?>
		<div class="input">
			
			<?php echo $form->textField($model,'otros'); ?>
			<?php echo $form->error($model,'otros'); ?>
		</div>
	</div>

	<div class="<?php echo $form->fieldClass($model, 'ninguna'); ?>">
		<?php echo $form->labelEx($model,'ninguna'); ?>
		<div class="input">
			
			<?php echo $form->textField($model,'ninguna'); ?>
			<?php echo $form->error($model,'ninguna'); ?>
		</div>
	</div>

	<div class="<?php echo $form->fieldClass($model, 'institucion_aid'); ?>">
		<?php echo $form->labelEx($model,'institucion_aid'); ?>
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
			<?php echo $form->error($model,'institucion_aid'); ?>
		</div>
	</div>

	<div class="<?php echo $form->fieldClass($model, 'ejercicioFiscal_did'); ?>">
		<?php echo $form->labelEx($model,'ejercicioFiscal_did'); ?>
		<div class="input">
			
			<?php echo $form->dropDownList($model,'ejercicioFiscal_did',CHtml::listData(::model()->findAll(), 'id', 'nombre')); ?>
			<?php echo $form->error($model,'ejercicioFiscal_did'); ?>
		</div>
	</div>

	<div class="<?php echo $form->fieldClass($model, 'estatus_did'); ?>">
		<?php echo $form->labelEx($model,'estatus_did'); ?>
		<div class="input">
			
			<?php echo $form->dropDownList($model,'estatus_did',CHtml::listData(::model()->findAll(), 'id', 'nombre')); ?>
			<?php echo $form->error($model,'estatus_did'); ?>
		</div>
	</div>

	<div class="<?php echo $form->fieldClass($model, 'editable'); ?>">
		<?php echo $form->labelEx($model,'editable'); ?>
		<div class="input">
			
			<?php echo $form->textField($model,'editable'); ?>
			<?php echo $form->error($model,'editable'); ?>
		</div>
	</div>

	<div class="<?php echo $form->fieldClass($model, 'ultimaModificacion_dt'); ?>">
		<?php echo $form->labelEx($model,'ultimaModificacion_dt'); ?>
		<div class="input">
			
			<?php echo $form->textField($model,'ultimaModificacion_dt'); ?>
			<?php echo $form->error($model,'ultimaModificacion_dt'); ?>
		</div>
	</div>

	<div class="actions">
		<?php echo BHtml::submitButton($model->isNewRecord ? 'Crear' : 'Guardar'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->
