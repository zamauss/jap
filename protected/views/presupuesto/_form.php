<div style="text-align:right;">
	<button class="btn btn-primary" type="button" onclick="window.print();">Imprimir Formulario</button>
</div>
<br/>
<div class="well">
	<div class="form">
	
	<?php $form=$this->beginWidget('BActiveForm', array(
		'id'=>'presupuesto-form',
		'enableAjaxValidation'=>false,
	)); ?>
	
		
	
		<?php echo $form->errorSummary($model); ?>
		
		<div class="alert alert-info">		  
		  <h3>Ingresos</h3>
		</div>
		
		<div class="alert alert-info">		  
		  <h6>Ingreso por Donativo</h6>
		</div>
	
		<div class="<?php echo $form->fieldClass($model, 'personaFisica'); ?>">
			<?php echo $form->labelEx($model,'personaFisica'); ?>
			<div class="input-prepend">
				<span class="add-on">$</span>
				
				<?php echo $form->textField($model,'personaFisica'); ?>
				<?php echo $form->error($model,'personaFisica'); ?>
			</div>
		</div>
	
		<div class="<?php echo $form->fieldClass($model, 'personaMoral'); ?>">
			<?php echo $form->labelEx($model,'personaMoral'); ?>
			<div class="input-prepend">
				<span class="add-on">$</span>
				
				<?php echo $form->textField($model,'personaMoral'); ?>
				<?php echo $form->error($model,'personaMoral'); ?>
			</div>
		</div>
	
		<div class="<?php echo $form->fieldClass($model, 'fundacionesNacionales'); ?>">
			<?php echo $form->labelEx($model,'fundacionesNacionales'); ?>
			<div class="input-prepend">
				<span class="add-on">$</span>
				
				<?php echo $form->textField($model,'fundacionesNacionales'); ?>
				<?php echo $form->error($model,'fundacionesNacionales'); ?>
			</div>
		</div>
	
		<div class="<?php echo $form->fieldClass($model, 'fundacionesExtranjeras'); ?>">
			<?php echo $form->labelEx($model,'fundacionesExtranjeras'); ?>
			<div class="input-prepend">
				<span class="add-on">$</span>
				
				<?php echo $form->textField($model,'fundacionesExtranjeras'); ?>
				<?php echo $form->error($model,'fundacionesExtranjeras'); ?>
			</div>
		</div>
	
		<div class="<?php echo $form->fieldClass($model, 'fondosGubernamentalesMunicipal'); ?>">
			<?php echo $form->labelEx($model,'fondosGubernamentalesMunicipal'); ?>
			<div class="input-prepend">
				<span class="add-on">$</span>
				
				<?php echo $form->textField($model,'fondosGubernamentalesMunicipal'); ?>
				<?php echo $form->error($model,'fondosGubernamentalesMunicipal'); ?>
			</div>
		</div>
	
		<div class="<?php echo $form->fieldClass($model, 'fondosGubernamentalesEstatal'); ?>">
			<?php echo $form->labelEx($model,'fondosGubernamentalesEstatal'); ?>
			<div class="input-prepend">
				<span class="add-on">$</span>
				
				<?php echo $form->textField($model,'fondosGubernamentalesEstatal'); ?>
				<?php echo $form->error($model,'fondosGubernamentalesEstatal'); ?>
			</div>
		</div>
	
		<div class="<?php echo $form->fieldClass($model, 'fondosGubernamentalesFederal'); ?>">
			<?php echo $form->labelEx($model,'fondosGubernamentalesFederal'); ?>
			<div class="input-prepend">
				<span class="add-on">$</span>
				
				<?php echo $form->textField($model,'fondosGubernamentalesFederal'); ?>
				<?php echo $form->error($model,'fondosGubernamentalesFederal'); ?>
			</div>
		</div>
	
		<div class="<?php echo $form->fieldClass($model, 'especie'); ?>">
			<?php echo $form->labelEx($model,'especie'); ?>
			<div class="input-prepend">
				<span class="add-on">$</span>
				
				<?php echo $form->textField($model,'especie'); ?>
				<?php echo $form->error($model,'especie'); ?>
				<a href="#" class="tooltipmessage" rel="tooltip" 
				title="Valor estimado del donativo en especie">
					<i class="icon-info-sign"></i>
				</a>

			</div>
		</div>
		
		<hr class="bs-docs-separator"/>
				
		<div class="alert alert-info">		  
		  <h6>Ingreso por Cuotas de Recuperación</h6>
		</div>
	
		<div class="<?php echo $form->fieldClass($model, 'importeCuotas'); ?>">
			<?php echo $form->labelEx($model,'importeCuotas'); ?>
			<div class="input-prepend">
				<span class="add-on">$</span>
				
				<?php echo $form->textField($model,'importeCuotas'); ?>
				<?php echo $form->error($model,'importeCuotas'); ?>
			</div>
		</div>
		
		<hr class="bs-docs-separator"/>
				
		<div class="alert alert-info">		  
		  <h6>Ingreso por Evento</h6>
		</div>
		
		<div class="<?php echo $form->fieldClass($model, 'colectas'); ?>">
			<?php echo $form->labelEx($model,'colectas'); ?>
			<div class="input-prepend">
				<span class="add-on">$</span>
				
				<?php echo $form->textField($model,'colectas'); ?>
				<?php echo $form->error($model,'colectas'); ?>
			</div>
		</div>
	
		<div class="<?php echo $form->fieldClass($model, 'eventos'); ?>">
			<?php echo $form->labelEx($model,'eventos'); ?>
			<div class="input-prepend">
				<span class="add-on">$</span>
				
				<?php echo $form->textField($model,'eventos'); ?>
				<?php echo $form->error($model,'eventos'); ?>
			</div>
		</div>
	
		<div class="<?php echo $form->fieldClass($model, 'rifas'); ?>">
			<?php echo $form->labelEx($model,'rifas'); ?>
			<div class="input-prepend">
				<span class="add-on">$</span>
				
				<?php echo $form->textField($model,'rifas'); ?>
				<?php echo $form->error($model,'rifas'); ?>
			</div>
		</div>
	
		<div class="<?php echo $form->fieldClass($model, 'conferencias'); ?>">
			<?php echo $form->labelEx($model,'conferencias'); ?>
			<div class="input-prepend">
				<span class="add-on">$</span>
				
				<?php echo $form->textField($model,'conferencias'); ?>
				<?php echo $form->error($model,'conferencias'); ?>
			</div>
		</div>
		
		<div class="<?php echo $form->fieldClass($model, 'ventas'); ?>">
			<?php echo $form->labelEx($model,'ventas'); ?>
			<div class="input-prepend">
				<span class="add-on">$</span>	
				<?php echo $form->textField($model,'ventas'); ?>
				<?php echo $form->error($model,'ventas'); ?>
			</div>
		</div>	
			
		<div class="<?php echo $form->fieldClass($model, 'ieOtros'); ?>">
			<?php echo $form->labelEx($model,'ieOtros'); ?>
			<div class="input-prepend">
				<span class="add-on">$</span>	
				<?php echo $form->textField($model,'ieOtros'); ?>
				<?php echo $form->error($model,'ieOtros'); ?>
			</div>
		</div>	
		
		<hr class="bs-docs-separator"/>
				
		<div class="alert alert-info">		
			<h3>Egresos</h3> 
		</div>
		
		<div class="alert alert-info">		  
		  <h6>Gasto Asistencial / Operativo</h6>
		</div>
	
		<div class="<?php echo $form->fieldClass($model, 'goSueldos'); ?>">
			<?php echo $form->labelEx($model,'goSueldos'); ?>
			<div class="input-prepend">
				<span class="add-on">$</span>
				
				<?php echo $form->textField($model,'goSueldos'); ?>
				<?php echo $form->error($model,'goSueldos'); ?>
			</div>
		</div>
		
		<div class="<?php echo $form->fieldClass($model, 'goAsimilables'); ?>">
			<?php echo $form->labelEx($model,'goAsimilables'); ?>
			<div class="input-prepend">
				<span class="add-on">$</span>
				
				<?php echo $form->textField($model,'goAsimilables'); ?>
				<?php echo $form->error($model,'goAsimilables'); ?>
			</div>
		</div>
	
		<div class="<?php echo $form->fieldClass($model, 'goHonorarios'); ?>">
			<?php echo $form->labelEx($model,'goHonorarios'); ?>
			<div class="input-prepend">
				<span class="add-on">$</span>
				
				<?php echo $form->textField($model,'goHonorarios'); ?>
				<?php echo $form->error($model,'goHonorarios'); ?>
			</div>
		</div>
	
		<div class="<?php echo $form->fieldClass($model, 'goCombustibles'); ?>">
			<?php echo $form->labelEx($model,'goCombustibles'); ?>
			<div class="input-prepend">
				<span class="add-on">$</span>
				
				<?php echo $form->textField($model,'goCombustibles'); ?>
				<?php echo $form->error($model,'goCombustibles'); ?>
			</div>
		</div>
	
		<div class="<?php echo $form->fieldClass($model, 'goLuzTelefono'); ?>">
			<?php echo $form->labelEx($model,'goLuzTelefono'); ?>
			<div class="input-prepend">
				<span class="add-on">$</span>
				
				<?php echo $form->textField($model,'goLuzTelefono'); ?>
				<?php echo $form->error($model,'goLuzTelefono'); ?>
			</div>
		</div>
	
		<div class="<?php echo $form->fieldClass($model, 'goPapeleria'); ?>">
			<?php echo $form->labelEx($model,'goPapeleria'); ?>
			<div class="input-prepend">
				<span class="add-on">$</span>
				
				<?php echo $form->textField($model,'goPapeleria'); ?>
				<?php echo $form->error($model,'goPapeleria'); ?>
			</div>
		</div>
	
		<div class="<?php echo $form->fieldClass($model, 'goRenta'); ?>">
			<?php echo $form->labelEx($model,'goRenta'); ?>
			<div class="input-prepend">
				<span class="add-on">$</span>
				
				<?php echo $form->textField($model,'goRenta'); ?>
				<?php echo $form->error($model,'goRenta'); ?>
			</div>
		</div>
	
		<div class="<?php echo $form->fieldClass($model, 'goImpuestosDerechos'); ?>">
			<?php echo $form->labelEx($model,'goImpuestosDerechos'); ?>
			<div class="input-prepend">
				<span class="add-on">$</span>
				
				<?php echo $form->textField($model,'goImpuestosDerechos'); ?>
				<?php echo $form->error($model,'goImpuestosDerechos'); ?>
			</div>
		</div>
	
		<div class="<?php echo $form->fieldClass($model, 'goOtros'); ?>">
			<?php echo $form->labelEx($model,'goOtros'); ?>
			<div class="input-prepend">
				<span class="add-on">$</span>
				
				<?php echo $form->textField($model,'goOtros'); ?>
				<?php echo $form->error($model,'goOtros'); ?>
			</div>
		</div>
		
		<hr class="bs-docs-separator"/>
			
		<div class="alert alert-info">		
			<h6>Gasto Administrativo</h6>
		</div>
		
		<div class="alert alert-block alert-success">
		  <b>Instrucciones</b><br/>
		  No mayor al 5% de sus ingresos totales.<br/>		  
		</div>
	
		<div class="<?php echo $form->fieldClass($model, 'gaSueldos'); ?>">
			<?php echo $form->labelEx($model,'gaSueldos'); ?>
			<div class="input-prepend">
				<span class="add-on">$</span>
				
				<?php echo $form->textField($model,'gaSueldos'); ?>
				<?php echo $form->error($model,'gaSueldos'); ?>
			</div>
		</div>
		
		<div class="<?php echo $form->fieldClass($model, 'gaAsimilables'); ?>">
			<?php echo $form->labelEx($model,'gaAsimilables'); ?>
			<div class="input-prepend">
				<span class="add-on">$</span>
				
				<?php echo $form->textField($model,'gaAsimilables'); ?>
				<?php echo $form->error($model,'gaAsimilables'); ?>
			</div>
		</div>
	
		<div class="<?php echo $form->fieldClass($model, 'gaHonorarios'); ?>">
			<?php echo $form->labelEx($model,'gaHonorarios'); ?>
			<div class="input-prepend">
				<span class="add-on">$</span>
				
				<?php echo $form->textField($model,'gaHonorarios'); ?>
				<?php echo $form->error($model,'gaHonorarios'); ?>
			</div>
		</div>
	
		<div class="<?php echo $form->fieldClass($model, 'gaCombustibles'); ?>">
			<?php echo $form->labelEx($model,'gaCombustibles'); ?>
			<div class="input-prepend">
				<span class="add-on">$</span>
				
				<?php echo $form->textField($model,'gaCombustibles'); ?>
				<?php echo $form->error($model,'gaCombustibles'); ?>
			</div>
		</div>
	
		<div class="<?php echo $form->fieldClass($model, 'gaLuzTelefono'); ?>">
			<?php echo $form->labelEx($model,'gaLuzTelefono'); ?>
			<div class="input-prepend">
				<span class="add-on">$</span>
				
				<?php echo $form->textField($model,'gaLuzTelefono'); ?>
				<?php echo $form->error($model,'gaLuzTelefono'); ?>
			</div>
		</div>
	
		<div class="<?php echo $form->fieldClass($model, 'gaPapeleria'); ?>">
			<?php echo $form->labelEx($model,'gaPapeleria'); ?>
			<div class="input-prepend">
				<span class="add-on">$</span>
				
				<?php echo $form->textField($model,'gaPapeleria'); ?>
				<?php echo $form->error($model,'gaPapeleria'); ?>
			</div>
		</div>
	
		<div class="<?php echo $form->fieldClass($model, 'gaImpuestosDerechos'); ?>">
			<?php echo $form->labelEx($model,'gaImpuestosDerechos'); ?>
			<div class="input-prepend">
				<span class="add-on">$</span>
				
				<?php echo $form->textField($model,'gaImpuestosDerechos'); ?>
				<?php echo $form->error($model,'gaImpuestosDerechos'); ?>
			</div>
		</div>
	
		<div class="<?php echo $form->fieldClass($model, 'gaOtros'); ?>">
			<?php echo $form->labelEx($model,'gaOtros'); ?>
			<div class="input-prepend">
				<span class="add-on">$</span>
				
				<?php echo $form->textField($model,'gaOtros'); ?>
				<?php echo $form->error($model,'gaOtros'); ?>
			</div>
		</div>
		
		<hr class="bs-docs-separator"/>
				
		<div class="alert alert-info">		  
		  <h6>Inversiones</h6>
		</div>
	
		<div class="<?php echo $form->fieldClass($model, 'terrenos'); ?>">
			<?php echo $form->labelEx($model,'terrenos'); ?>
			<div class="input-prepend">
				<span class="add-on">$</span>
				
				<?php echo $form->textField($model,'terrenos'); ?>
				<?php echo $form->error($model,'terrenos'); ?>
			</div>
		</div>
	
		<div class="<?php echo $form->fieldClass($model, 'inmuebles'); ?>">
			<?php echo $form->labelEx($model,'inmuebles'); ?>
			<div class="input-prepend">
				<span class="add-on">$</span>
				
				<?php echo $form->textField($model,'inmuebles'); ?>
				<?php echo $form->error($model,'inmuebles'); ?>
			</div>
		</div>
	
		<div class="<?php echo $form->fieldClass($model, 'equipoOficina'); ?>">
			<?php echo $form->labelEx($model,'equipoOficina'); ?>
			<div class="input-prepend">
				<span class="add-on">$</span>
				
				<?php echo $form->textField($model,'equipoOficina'); ?>
				<?php echo $form->error($model,'equipoOficina'); ?>
			</div>
		</div>
	
		<div class="<?php echo $form->fieldClass($model, 'equipoTransporte'); ?>">
			<?php echo $form->labelEx($model,'equipoTransporte'); ?>
			<div class="input-prepend">
				<span class="add-on">$</span>
				
				<?php echo $form->textField($model,'equipoTransporte'); ?>
				<?php echo $form->error($model,'equipoTransporte'); ?>
			</div>
		</div>
	
		<div class="<?php echo $form->fieldClass($model, 'institucionBancaria'); ?>">
			<?php echo $form->labelEx($model,'institucionBancaria'); ?>
			<div class="input-prepend">
				<span class="add-on">$</span>
				
				<?php echo $form->textField($model,'institucionBancaria'); ?>
				<?php echo $form->error($model,'institucionBancaria'); ?>
			</div>
		</div>
	
		<div class="<?php echo $form->fieldClass($model, 'otros'); ?>">
			<?php echo $form->labelEx($model,'otros'); ?>
			<div class="input-prepend">
				<span class="add-on">$</span>
				
				<?php echo $form->textField($model,'otros'); ?>
				<?php echo $form->error($model,'otros'); ?>
			</div>
		</div>
		
		<hr class="bs-docs-separator"/>
				
		<div class="alert alert-info">		  
		  <h6>Inversión en institución bancaria</h6>
		</div>
	
		<div class="<?php echo $form->fieldClass($model, 'inversionesBancos'); ?>">
			<?php echo $form->labelEx($model,'inversionesBancos'); ?>
			<div class="input-prepend">
				<span class="add-on">$</span>
				
				<?php echo $form->textField($model,'inversionesBancos'); ?>
				<?php echo $form->error($model,'inversionesBancos'); ?>
			</div>
		</div>
		
		<hr class="bs-docs-separator"/>
				
		<div class="alert alert-info">		  
		  <h6>Promoción</h6>
		</div>
	
		<div class="<?php echo $form->fieldClass($model, 'promocion'); ?>">
			<?php echo $form->labelEx($model,'promocion'); ?>
			<div class="input-prepend">
				<span class="add-on">$</span>
				
				<?php echo $form->textField($model,'promocion'); ?>
				<?php echo $form->error($model,'promocion'); ?>
			</div>
		</div>
		
		<div class="<?php echo $form->fieldClass($model, 'responsableLlenado'); ?>">
			<?php echo $form->labelEx($model,'responsableLlenado'); ?>
			<div class="input-prepend">
				<span class="add-on">Texto</span>
				<?php echo $form->textField($model,'responsableLlenado'); ?>
				<?php echo $form->error($model,'responsableLlenado'); ?>
			</div>
		</div>
	
		<div class="form-actions">
		  <?php echo BHtml::submitButton($model->isNewRecord ? 'Guardar Presupuesto' : 'Modificar Presupuesto'); ?>
		  <?php echo CHtml::button('Cancelar', array('submit' => array('site/index'), 'class'=>'btn')); ?>
		</div>	
	
	<?php $this->endWidget(); ?>
	
	</div><!-- form -->

</div>
