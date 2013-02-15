<div style="text-align:right;">
	<button class="btn btn-primary" type="button" onclick="window.print();">Imprimir Formulario</button>
</div>
<br/>
<div class="well">
	<div class="form">
		<?php $form=$this->beginWidget('BActiveForm', array(
			'id'=>'ingreso-por-donativo-form',
			'enableAjaxValidation'=>false,
		)); ?>
		
		<?php echo $form->errorSummary($modelInversion); ?>
		<?php echo $form->errorSummary($modelInforme); ?>
		<?php echo $form->errorSummary($modelDonativo); ?>
		<?php echo $form->errorSummary($modelIngresoPorCuotasDeRecuperacion); ?>
		<?php echo $form->errorSummary($modelIngresoPorEvento); ?>
		<?php echo $form->errorSummary($modelGastoOperativo); ?>
		<?php echo $form->errorSummary($modelGastoDeAdministracion); ?>
		
		<div class="alert alert-info">		  
		  <h3>Asistencial</h3>
		</div>
		
		<div class="alert alert-block alert-success">
		  <h3 class="alert-heading">Instrucciones</h3>
		  <b>Número</b> de beneficiarios por grupo etario.<br/>
		  <li>Niños de 0 a 14 años.</li>
		  <li>Jóvenes de 15-24 años.</li>
		  <li>Adultos de 25-59 años.</li>
		  <li>Adultos mayores más de 60 años.</li>
		</div>
		<br/>
		
		
		<div class="alert alert-info">					  
		  <h6>Beneficiarios Directos <a href="#" class="tooltipmessage" rel="tooltip" title="Personas que reciben servicio de manera directa">
		  	<i class="icon-info-sign"></i></h6>
		  
		  </a>		  
		</div>
		

		<div class="<?php echo $form->fieldClass($modelInforme, 'numeroBeneficiariosNinosH'); ?>">
			<?php echo $form->labelEx($modelInforme,'numeroBeneficiariosNinosH'); ?>
			<div class="input-prepend">
				<span class="add-on">#</span>	
				
				<?php echo $form->textField($modelInforme,'numeroBeneficiariosNinosH'); ?>
				<?php echo $form->error($modelInforme,'numeroBeneficiariosNinosH'); ?>
			</div>
		</div>
	
		<div class="<?php echo $form->fieldClass($modelInforme, 'numeroBeneficiariosNinosM'); ?>">
			<?php echo $form->labelEx($modelInforme,'numeroBeneficiariosNinosM'); ?>
			<div class="input-prepend">
				<span class="add-on">#</span>	
				
				<?php echo $form->textField($modelInforme,'numeroBeneficiariosNinosM'); ?>
				<?php echo $form->error($modelInforme,'numeroBeneficiariosNinosM'); ?>
			</div>
		</div>
	
		<div class="<?php echo $form->fieldClass($modelInforme, 'numeroBeneficiariosJovenesH'); ?>">
			<?php echo $form->labelEx($modelInforme,'numeroBeneficiariosJovenesH'); ?>
			<div class="input-prepend">
				<span class="add-on">#</span>	
				
				<?php echo $form->textField($modelInforme,'numeroBeneficiariosJovenesH'); ?>
				<?php echo $form->error($modelInforme,'numeroBeneficiariosJovenesH'); ?>
			</div>
		</div>
	
		<div class="<?php echo $form->fieldClass($modelInforme, 'numeroBeneficiariosJovenesM'); ?>">
			<?php echo $form->labelEx($modelInforme,'numeroBeneficiariosJovenesM'); ?>
			<div class="input-prepend">
				<span class="add-on">#</span>	
				
				<?php echo $form->textField($modelInforme,'numeroBeneficiariosJovenesM'); ?>
				<?php echo $form->error($modelInforme,'numeroBeneficiariosJovenesM'); ?>
			</div>
		</div>
	
		<div class="<?php echo $form->fieldClass($modelInforme, 'numeroBeneficiariosAdultosH'); ?>">
			<?php echo $form->labelEx($modelInforme,'numeroBeneficiariosAdultosH'); ?>
			<div class="input-prepend">
				<span class="add-on">#</span>	
				
				<?php echo $form->textField($modelInforme,'numeroBeneficiariosAdultosH'); ?>
				<?php echo $form->error($modelInforme,'numeroBeneficiariosAdultosH'); ?>
			</div>
		</div>
	
		<div class="<?php echo $form->fieldClass($modelInforme, 'numeroBeneficiariosAdultosM'); ?>">
			<?php echo $form->labelEx($modelInforme,'numeroBeneficiariosAdultosM'); ?>
			<div class="input-prepend">
				<span class="add-on">#</span>	
				
				<?php echo $form->textField($modelInforme,'numeroBeneficiariosAdultosM'); ?>
				<?php echo $form->error($modelInforme,'numeroBeneficiariosAdultosM'); ?>
			</div>
		</div>
	
		<div class="<?php echo $form->fieldClass($modelInforme, 'numeroBeneficiariosMayorH'); ?>">
			<?php echo $form->labelEx($modelInforme,'numeroBeneficiariosMayorH'); ?>
			<div class="input-prepend">
				<span class="add-on">#</span>	
				
				<?php echo $form->textField($modelInforme,'numeroBeneficiariosMayorH'); ?>
				<?php echo $form->error($modelInforme,'numeroBeneficiariosMayorH'); ?>
			</div>
		</div>
	
		<div class="<?php echo $form->fieldClass($modelInforme, 'numeroBeneficiariosMayorM'); ?>">
			<?php echo $form->labelEx($modelInforme,'numeroBeneficiariosMayorM'); ?>
			<div class="input-prepend">
				<span class="add-on">#</span>	
				
				<?php echo $form->textField($modelInforme,'numeroBeneficiariosMayorM'); ?>
				<?php echo $form->error($modelInforme,'numeroBeneficiariosMayorM'); ?>
			</div>
		</div>
	
		<div class="<?php echo $form->fieldClass($modelInforme, 'numeroBeneficiariosIndirectos'); ?>">
			<?php echo $form->labelEx($modelInforme,'numeroBeneficiariosIndirectos'); ?>
			<div class="input-prepend">
				<span class="add-on">#</span>	
				
				<?php echo $form->textField($modelInforme,'numeroBeneficiariosIndirectos'); ?>
				<?php echo $form->error($modelInforme,'numeroBeneficiariosIndirectos'); ?>
				<a href="#" class="tooltipmessage" rel="tooltip" title="Personas que les beneficia el servicio en orden secundario"><i class="icon-info-sign"></i>  	</a>
			</div>
		</div>
		
		<hr class="bs-docs-separator"/>
		
		<div class="alert alert-info">		  
		  <h6>Programas</h6>
		</div>
		
		<div class="alert alert-block alert-success">
		  <h3 class="alert-heading">Instrucciones</h3>
		  Relacione los programas que lleva a cabo y el número de horas aportadas por sus voluntarios.
		</div>
		
		<div class="row">
			<div class="span5">
				<div class="<?php echo $form->fieldClass($modelInforme, 'nombreProgramaUno'); ?>">
					<?php echo $form->labelEx($modelInforme,'nombreProgramaUno',array('style'=>'width:100px;')); ?>
					<div class="input-prepend">
						<span class="add-on">Texto</span>	
						
						<?php echo $form->textField($modelInforme,'nombreProgramaUno',array('size'=>60,'maxlength'=>100, 'style'=>'width:195px;')); ?>
						<?php echo $form->error($modelInforme,'nombreProgramaUno'); ?>
					</div>
				</div>
			</div>
			<div class="span5">
				<div class="<?php echo $form->fieldClass($modelInforme, 'horasVoluntariosProgramaUno'); ?>">
					<?php echo $form->labelEx($modelInforme,'horasVoluntariosProgramaUno'); ?>
					<div class="input-prepend">
						<span class="add-on">#</span>	
						
						<?php echo $form->textField($modelInforme,'horasVoluntariosProgramaUno',array('style'=>'width:30px;')); ?>
						<?php echo $form->error($modelInforme,'horasVoluntariosProgramaUno'); ?>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="span5">
				<div class="<?php echo $form->fieldClass($modelInforme, 'nombreProgramaDos'); ?>">
					<?php echo $form->labelEx($modelInforme,'nombreProgramaDos',array('style'=>'width:100px;')); ?>
					<div class="input-prepend">
						<span class="add-on">Texto</span>	
						
						<?php echo $form->textField($modelInforme,'nombreProgramaDos',array('size'=>60,'maxlength'=>100, 'style'=>'width:195px;')); ?>
						<?php echo $form->error($modelInforme,'nombreProgramaDos'); ?>
					</div>
				</div>
			</div>
			
			<div class="span5">
				<div class="<?php echo $form->fieldClass($modelInforme, 'horasVoluntariosProgramaDos'); ?>">
					<?php echo $form->labelEx($modelInforme,'horasVoluntariosProgramaDos'); ?>
					<div class="input-prepend">
						<span class="add-on">#</span>	
						
						<?php echo $form->textField($modelInforme,'horasVoluntariosProgramaDos',array('style'=>'width:30px;')); ?>
						<?php echo $form->error($modelInforme,'horasVoluntariosProgramaDos'); ?>
					</div>
				</div>
			</div>
		</div>
		<div class="row">	
			<div class="span5">
				<div class="<?php echo $form->fieldClass($modelInforme, 'nombreProgramaTres'); ?>">
					<?php echo $form->labelEx($modelInforme,'nombreProgramaTres',array('style'=>'width:100px;')); ?>
					<div class="input-prepend">
						<span class="add-on">Texto</span>	
						
						<?php echo $form->textField($modelInforme,'nombreProgramaTres',array('size'=>60,'maxlength'=>100, 'style'=>'width:195px;')); ?>
						<?php echo $form->error($modelInforme,'nombreProgramaTres'); ?>
					</div>
				</div>
			</div>
			
			<div class="span5">
				<div class="<?php echo $form->fieldClass($modelInforme, 'horasVoluntariosProgramaTres'); ?>">
					<?php echo $form->labelEx($modelInforme,'horasVoluntariosProgramaTres'); ?>
					<div class="input-prepend">
						<span class="add-on">#</span>	
						
						<?php echo $form->textField($modelInforme,'horasVoluntariosProgramaTres',array('style'=>'width:30px;')); ?>
						<?php echo $form->error($modelInforme,'horasVoluntariosProgramaTres'); ?>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="span5">
				<div class="<?php echo $form->fieldClass($modelInforme, 'nombreProgramaCuatro'); ?>">
					<?php echo $form->labelEx($modelInforme,'nombreProgramaCuatro',array('style'=>'width:100px;')); ?>
					<div class="input-prepend">
						<span class="add-on">Texto</span>	
						
						<?php echo $form->textField($modelInforme,'nombreProgramaCuatro',array('size'=>60,'maxlength'=>100, 'style'=>'width:195px;')); ?>
						<?php echo $form->error($modelInforme,'nombreProgramaCuatro'); ?>
					</div>
				</div>
			</div>
			
			<div class="span5">
				<div class="<?php echo $form->fieldClass($modelInforme, 'horasVoluntariosProgramaCuatro'); ?>">
					<?php echo $form->labelEx($modelInforme,'horasVoluntariosProgramaCuatro'); ?>
					<div class="input-prepend">
						<span class="add-on">#</span>	
						
						<?php echo $form->textField($modelInforme,'horasVoluntariosProgramaCuatro',array('style'=>'width:30px;')); ?>
						<?php echo $form->error($modelInforme,'horasVoluntariosProgramaCuatro'); ?>
					</div>
				</div>
			</div>		
		</div>
		<div class="row">
			<div class="span5">
				<div class="<?php echo $form->fieldClass($modelInforme, 'nombreProgramaCinco'); ?>">
					<?php echo $form->labelEx($modelInforme,'nombreProgramaCinco',array('style'=>'width:100px;')); ?>
					<div class="input-prepend">
						<span class="add-on">Texto</span>	
						
						<?php echo $form->textField($modelInforme,'nombreProgramaCinco',array('size'=>60,'maxlength'=>100, 'style'=>'width:195px;')); ?>
						<?php echo $form->error($modelInforme,'nombreProgramaCinco'); ?>
					</div>
				</div>
			</div>
			
			<div class="span5">
				<div class="<?php echo $form->fieldClass($modelInforme, 'horasVoluntariosProgramaCinco'); ?>">
					<?php echo $form->labelEx($modelInforme,'horasVoluntariosProgramaCinco'); ?>
					<div class="input-prepend">
						<span class="add-on">#</span>	
						
						<?php echo $form->textField($modelInforme,'horasVoluntariosProgramaCinco',array('style'=>'width:30px;')); ?>
						<?php echo $form->error($modelInforme,'horasVoluntariosProgramaCinco'); ?>
					</div>
				</div>	
			</div>
		</div>
		
		<hr class="bs-docs-separator"/>
		
		<div class="alert alert-info">		  
		  <h6>Equipo operativo</h6>
		</div>
		
		<div class="alert alert-block alert-success">
		  <h3 class="alert-heading">Instrucciones</h3>
		  <b>Número</b> de personas que colaboran en la IAP.
		</div>
		
		<div class="<?php echo $form->fieldClass($modelInforme, 'numeroPersonasNomina'); ?>">
			<?php echo $form->labelEx($modelInforme,'numeroPersonasNomina'); ?>
			<div class="input-prepend">
				<span class="add-on">#</span>	
				<?php echo $form->textField($modelInforme,'numeroPersonasNomina'); ?>
				<?php echo $form->error($modelInforme,'numeroPersonasNomina'); ?>	
				<a href="#" class="tooltipmessage" rel="tooltip" title="Personas con seguro social."><i class="icon-info-sign"></i>  	</a>			
			</div>
		</div>
			
		<div class="<?php echo $form->fieldClass($modelInforme, 'numeroPersonasAsimilables'); ?>">
			<?php echo $form->labelEx($modelInforme,'numeroPersonasAsimilables'); ?>
			<div class="input-prepend">
				<span class="add-on">#</span>	
				
				<?php echo $form->textField($modelInforme,'numeroPersonasAsimilables'); ?>
				<?php echo $form->error($modelInforme,'numeroPersonasAsimilables'); ?>
			</div>
		</div>
	
		<div class="<?php echo $form->fieldClass($modelInforme, 'numeroPersonasProfesionales'); ?>">
			<?php echo $form->labelEx($modelInforme,'numeroPersonasProfesionales'); ?>
			<div class="input-prepend">
				<span class="add-on">#</span>	
				
				<?php echo $form->textField($modelInforme,'numeroPersonasProfesionales'); ?>
				<?php echo $form->error($modelInforme,'numeroPersonasProfesionales'); ?>
			</div>
		</div>
	
		<div class="<?php echo $form->fieldClass($modelInforme, 'numeroPersonasVoluntarias'); ?>">
			<?php echo $form->labelEx($modelInforme,'numeroPersonasVoluntarias'); ?>
			<div class="input-prepend">
				<span class="add-on">#</span>	
				
				<?php echo $form->textField($modelInforme,'numeroPersonasVoluntarias'); ?>
				<?php echo $form->error($modelInforme,'numeroPersonasVoluntarias'); ?>
			</div>
		</div>
	
		<div class="<?php echo $form->fieldClass($modelInforme, 'numeroPersonasPrestadoresSS'); ?>">
			<?php echo $form->labelEx($modelInforme,'numeroPersonasPrestadoresSS'); ?>
			<div class="input-prepend">
				<span class="add-on">#</span>	
				
				<?php echo $form->textField($modelInforme,'numeroPersonasPrestadoresSS'); ?>
				<?php echo $form->error($modelInforme,'numeroPersonasPrestadoresSS'); ?>
			</div>
		</div>

		<hr class="bs-docs-separator"/>
		
		<div class="alert alert-info">		  
		  <h6>Participación en Convocatorias</h6>
		</div>
		<div class="row">
			<div class="span5">
				<div class="<?php echo $form->fieldClass($modelInforme, 'nombreConvocatoriaUno'); ?>">
					<?php echo $form->labelEx($modelInforme,'nombreConvocatoriaUno'); ?>
					<div class="input-prepend">
						<span class="add-on">Texto</span>
						
						<?php echo $form->textField($modelInforme,'nombreConvocatoriaUno',array('size'=>60,'maxlength'=>100, 'style'=>'width:180px;')); ?>
						<?php echo $form->error($modelInforme,'nombreConvocatoriaUno'); ?>
					</div>
				</div>
			</div>
		
			<div class="span5">
				<div class="<?php echo $form->fieldClass($modelInforme, 'aprovadaConvocatoriaUno'); ?>">
					<?php echo $form->labelEx($modelInforme,'aprovadaConvocatoriaUno'); ?>
					<div class="input">
						
						<?php echo $form->dropDownList($modelInforme,'aprovadaConvocatoriaUno',array('1'=>'Si','0'=>'No'),array('empty'=>'Seleccione','style'=>'width:120px;')); ?>
						<?php echo $form->error($modelInforme,'aprovadaConvocatoriaUno'); ?>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="span5">
				<div class="<?php echo $form->fieldClass($modelInforme, 'nombreConvocatoriaDos'); ?>">
					<?php echo $form->labelEx($modelInforme,'nombreConvocatoriaDos'); ?>
					<div class="input-prepend">
						<span class="add-on">Texto</span>
						
						<?php echo $form->textField($modelInforme,'nombreConvocatoriaDos',array('size'=>60,'maxlength'=>100, 'style'=>'width:180px;')); ?>
						<?php echo $form->error($modelInforme,'nombreConvocatoriaDos'); ?>
					</div>
				</div>
			</div>
			
			<div class="span5">
				<div class="<?php echo $form->fieldClass($modelInforme, 'aprovadaConvocatoriaDos'); ?>">
					<?php echo $form->labelEx($modelInforme,'aprovadaConvocatoriaDos'); ?>
					<div class="input">
						
						<?php echo $form->dropDownList($modelInforme,'aprovadaConvocatoriaDos',array('1'=>'Si','0'=>'No'),array('empty'=>'Seleccione','style'=>'width:120px;')); ?>
						<?php echo $form->error($modelInforme,'aprovadaConvocatoriaDos'); ?>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="span5">
				<div class="<?php echo $form->fieldClass($modelInforme, 'nombreConvocatoriaTres'); ?>">
					<?php echo $form->labelEx($modelInforme,'nombreConvocatoriaTres'); ?>
					<div class="input-prepend">
						<span class="add-on">Texto</span>
						
						<?php echo $form->textField($modelInforme,'nombreConvocatoriaTres',array('size'=>60,'maxlength'=>100, 'style'=>'width:180px;')); ?>
						<?php echo $form->error($modelInforme,'nombreConvocatoriaTres'); ?>
					</div>
				</div>
			</div>
			
			<div class="span5">
				<div class="<?php echo $form->fieldClass($modelInforme, 'aprovadaConvocatoriaTres'); ?>">
					<?php echo $form->labelEx($modelInforme,'aprovadaConvocatoriaTres'); ?>
					<div class="input">
						
						<?php echo $form->dropDownList($modelInforme,'aprovadaConvocatoriaTres',array('1'=>'Si','0'=>'No'),array('empty'=>'Seleccione','style'=>'width:120px;')); ?>
						<?php echo $form->error($modelInforme,'aprovadaConvocatoriaTres'); ?>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="span5">
				<div class="<?php echo $form->fieldClass($modelInforme, 'nombreConvocatoriaCuatro'); ?>">
					<?php echo $form->labelEx($modelInforme,'nombreConvocatoriaCuatro'); ?>
					<div class="input-prepend">
						<span class="add-on">Texto</span>
						
						<?php echo $form->textField($modelInforme,'nombreConvocatoriaCuatro',array('size'=>60,'maxlength'=>100, 'style'=>'width:180px;')); ?>
						<?php echo $form->error($modelInforme,'nombreConvocatoriaCuatro'); ?>
					</div>
				</div>
			</div>
			
			<div class="span5">
				<div class="<?php echo $form->fieldClass($modelInforme, 'aprovadaConvocatoriaCuatro'); ?>">
					<?php echo $form->labelEx($modelInforme,'aprovadaConvocatoriaCuatro'); ?>
					<div class="input">
						
						<?php echo $form->dropDownList($modelInforme,'aprovadaConvocatoriaCuatro',array('1'=>'Si','0'=>'No'),array('empty'=>'Seleccione','style'=>'width:120px;')); ?>
						<?php echo $form->error($modelInforme,'aprovadaConvocatoriaCuatro'); ?>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="span5">
				<div class="<?php echo $form->fieldClass($modelInforme, 'nombreConvocatoriaCinco'); ?>">
					<?php echo $form->labelEx($modelInforme,'nombreConvocatoriaCinco'); ?>
					<div class="input-prepend">
						<span class="add-on">Texto</span>
						
						<?php echo $form->textField($modelInforme,'nombreConvocatoriaCinco',array('size'=>60,'maxlength'=>100, 'style'=>'width:180px;')); ?>
						<?php echo $form->error($modelInforme,'nombreConvocatoriaCinco'); ?>
					</div>
				</div>
			</div>
			
			<div class="span5">
				<div class="<?php echo $form->fieldClass($modelInforme, 'aprovadaConvocatoriaCinco'); ?>">
					<?php echo $form->labelEx($modelInforme,'aprovadaConvocatoriaCinco'); ?>
					<div class="input">
						
						<?php echo $form->dropDownList($modelInforme,'aprovadaConvocatoriaCinco',array('1'=>'Si','0'=>'No'),array('empty'=>'Seleccione','style'=>'width:120px;')); ?>
						<?php echo $form->error($modelInforme,'aprovadaConvocatoriaCinco'); ?>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="span5">
				<div class="<?php echo $form->fieldClass($modelInforme, 'nombreConvocatoriaSeis'); ?>">
					<?php echo $form->labelEx($modelInforme,'nombreConvocatoriaSeis'); ?>
					<div class="input-prepend">
						<span class="add-on">Texto</span>
						
						<?php echo $form->textField($modelInforme,'nombreConvocatoriaSeis',array('size'=>60,'maxlength'=>100, 'style'=>'width:180px;')); ?>
						<?php echo $form->error($modelInforme,'nombreConvocatoriaSeis'); ?>
					</div>
				</div>
			</div>
			
			<div class="span5">
				<div class="<?php echo $form->fieldClass($modelInforme, 'aprovadaConvocatoriaSeis'); ?>">
					<?php echo $form->labelEx($modelInforme,'aprovadaConvocatoriaSeis'); ?>
					<div class="input">
						
						<?php echo $form->dropDownList($modelInforme,'aprovadaConvocatoriaSeis',array('1'=>'Si','0'=>'No'),array('empty'=>'Seleccione','style'=>'width:120px;')); ?>
						<?php echo $form->error($modelInforme,'aprovadaConvocatoriaSeis'); ?>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="span5">
				<div class="<?php echo $form->fieldClass($modelInforme, 'nombreConvocatoriaSiete'); ?>">
					<?php echo $form->labelEx($modelInforme,'nombreConvocatoriaSiete'); ?>
					<div class="input-prepend">
						<span class="add-on">Texto</span>
						
						<?php echo $form->textField($modelInforme,'nombreConvocatoriaSiete',array('size'=>60,'maxlength'=>100, 'style'=>'width:180px;')); ?>
						<?php echo $form->error($modelInforme,'nombreConvocatoriaSiete'); ?>
					</div>
				</div>
			</div>
			
			<div class="span5">
				<div class="<?php echo $form->fieldClass($modelInforme, 'aprovadaConvocatoriaSiete'); ?>">
					<?php echo $form->labelEx($modelInforme,'aprovadaConvocatoriaSiete'); ?>
					<div class="input">
						
						<?php echo $form->dropDownList($modelInforme,'aprovadaConvocatoriaSiete',array('1'=>'Si','0'=>'No'),array('empty'=>'Seleccione','style'=>'width:120px;')); ?>
						<?php echo $form->error($modelInforme,'aprovadaConvocatoriaSiete'); ?>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="span5">
				<div class="<?php echo $form->fieldClass($modelInforme, 'nombreConvocatoriaOcho'); ?>">
					<?php echo $form->labelEx($modelInforme,'nombreConvocatoriaOcho'); ?>
					<div class="input-prepend">
						<span class="add-on">Texto</span>
						
						<?php echo $form->textField($modelInforme,'nombreConvocatoriaOcho',array('size'=>60,'maxlength'=>100, 'style'=>'width:180px;')); ?>
						<?php echo $form->error($modelInforme,'nombreConvocatoriaOcho'); ?>
					</div>
				</div>
			</div>
			
			<div class="span5">
				<div class="<?php echo $form->fieldClass($modelInforme, 'aprovadaConvocatoriaOcho'); ?>">
					<?php echo $form->labelEx($modelInforme,'aprovadaConvocatoriaOcho'); ?>
					<div class="input">
						
						<?php echo $form->dropDownList($modelInforme,'aprovadaConvocatoriaOcho',array('1'=>'Si','0'=>'No'),array('empty'=>'Seleccione','style'=>'width:120px;')); ?>
						<?php echo $form->error($modelInforme,'aprovadaConvocatoriaOcho'); ?>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="span5">
				<div class="<?php echo $form->fieldClass($modelInforme, 'nombreConvocatoriaNueve'); ?>">
					<?php echo $form->labelEx($modelInforme,'nombreConvocatoriaNueve'); ?>
					<div class="input-prepend">
						<span class="add-on">Texto</span>
						
						<?php echo $form->textField($modelInforme,'nombreConvocatoriaNueve',array('size'=>60,'maxlength'=>100, 'style'=>'width:180px;')); ?>
						<?php echo $form->error($modelInforme,'nombreConvocatoriaNueve'); ?>
					</div>
				</div>
			</div>
			
			<div class="span5">
				<div class="<?php echo $form->fieldClass($modelInforme, 'aprovadaConvocatoriaNueve'); ?>">
					<?php echo $form->labelEx($modelInforme,'aprovadaConvocatoriaNueve'); ?>
					<div class="input">
						
						<?php echo $form->dropDownList($modelInforme,'aprovadaConvocatoriaNueve',array('1'=>'Si','0'=>'No'),array('empty'=>'Seleccione','style'=>'width:120px;')); ?>
						<?php echo $form->error($modelInforme,'aprovadaConvocatoriaNueve'); ?>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="span5">
				<div class="<?php echo $form->fieldClass($modelInforme, 'nombreConvocatoriaDiez'); ?>">
					<?php echo $form->labelEx($modelInforme,'nombreConvocatoriaDiez'); ?>
					<div class="input-prepend">
						<span class="add-on">Texto</span>	
						
						<?php echo $form->textField($modelInforme,'nombreConvocatoriaDiez',array('size'=>60,'maxlength'=>100, 'style'=>'width:180px;')); ?>
						<?php echo $form->error($modelInforme,'nombreConvocatoriaDiez'); ?>
					</div>
				</div>
			</div>
			
			<div class="span5">
				<div class="<?php echo $form->fieldClass($modelInforme, 'aprovadaConvocatoriaDiez'); ?>">
					<?php echo $form->labelEx($modelInforme,'aprovadaConvocatoriaDiez'); ?>
					<div class="input">
						
						<?php echo $form->dropDownList($modelInforme,'aprovadaConvocatoriaDiez',array('1'=>'Si','0'=>'No'),array('empty'=>'Seleccione','style'=>'width:120px;')); ?>
						<?php echo $form->error($modelInforme,'aprovadaConvocatoriaDiez'); ?>
					</div>
				</div>
			</div>
		</div>
			
		<hr class="bs-docs-separator"/>
				
		<div class="alert alert-info">		  
		  <h3>Financiera</h3>
		</div>
		
		<div class="alert alert-info">		  
		  <h6>Ingresos por Donativos</h6>
		</div>
	
		<div class="<?php echo $form->fieldClass($modelDonativo, 'personaFisica'); ?>">
			<?php echo $form->labelEx($modelDonativo,'personaFisica'); ?>
			<div class="input-prepend">
				<span class="add-on">$</span>					
				<?php echo $form->textField($modelDonativo,'personaFisica'); ?>
				<?php echo $form->error($modelDonativo,'personaFisica'); ?>
			</div>
		</div>
	
		<div class="<?php echo $form->fieldClass($modelDonativo, 'personaMoral'); ?>">
			<?php echo $form->labelEx($modelDonativo,'personaMoral'); ?>
			<div class="input-prepend">
				<span class="add-on">$</span>	
				<?php echo $form->textField($modelDonativo,'personaMoral'); ?>
				<?php echo $form->error($modelDonativo,'personaMoral'); ?>
			</div>
		</div>
	
		<div class="<?php echo $form->fieldClass($modelDonativo, 'fundacionesNacionales'); ?>">
			<?php echo $form->labelEx($modelDonativo,'fundacionesNacionales'); ?>
			<div class="input-prepend">
				<span class="add-on">$</span>	
				<?php echo $form->textField($modelDonativo,'fundacionesNacionales'); ?>
				<?php echo $form->error($modelDonativo,'fundacionesNacionales'); ?>
			</div>
		</div>
	
		<div class="<?php echo $form->fieldClass($modelDonativo, 'fundacionesExtrajeras'); ?>">
			<?php echo $form->labelEx($modelDonativo,'fundacionesExtrajeras'); ?>
			<div class="input-prepend">
				<span class="add-on">$</span>	
				<?php echo $form->textField($modelDonativo,'fundacionesExtrajeras'); ?>
				<?php echo $form->error($modelDonativo,'fundacionesExtrajeras'); ?>
			</div>
		</div>
	
		<div class="<?php echo $form->fieldClass($modelDonativo, 'fondosGubernamentalesMunicipal'); ?>">
			<?php echo $form->labelEx($modelDonativo,'fondosGubernamentalesMunicipal'); ?>
			<div class="input-prepend">
				<span class="add-on">$</span>	
				<?php echo $form->textField($modelDonativo,'fondosGubernamentalesMunicipal'); ?>
				<?php echo $form->error($modelDonativo,'fondosGubernamentalesMunicipal'); ?>
			</div>
		</div>
		
		<div class="<?php echo $form->fieldClass($modelDonativo, 'fondosGubernamentalesEstatal'); ?>">
			<?php echo $form->labelEx($modelDonativo,'fondosGubernamentalesEstatal'); ?>
			<div class="input-prepend">
				<span class="add-on">$</span>	
				<?php echo $form->textField($modelDonativo,'fondosGubernamentalesEstatal'); ?>
				<?php echo $form->error($modelDonativo,'fondosGubernamentalesEstatal'); ?>
			</div>
		</div>
		
		<div class="<?php echo $form->fieldClass($modelDonativo, 'fondosGubernamentalesFederal'); ?>">
			<?php echo $form->labelEx($modelDonativo,'fondosGubernamentalesFederal'); ?>
			<div class="input-prepend">
				<span class="add-on">$</span>	
				<?php echo $form->textField($modelDonativo,'fondosGubernamentalesFederal'); ?>
				<?php echo $form->error($modelDonativo,'fondosGubernamentalesFederal'); ?>
			</div>
		</div>
	
		<div class="<?php echo $form->fieldClass($modelDonativo, 'especie'); ?>">
			<?php echo $form->labelEx($modelDonativo,'especie'); ?>
			<div class="input-prepend">
				<span class="add-on">$</span>	
				<?php echo $form->textField($modelDonativo,'especie'); ?>
				<?php echo $form->error($modelDonativo,'especie'); ?>
				<a href="#" class="tooltipmessage" rel="tooltip" 
				title="Valor estimado del donativo en especie">
					<i class="icon-info-sign"></i>
				</a>

			</div>
		</div>
		
		<hr class="bs-docs-separator"/>
			
		<div class="alert alert-info">		  
		  <h6>Ingresos por Cuotas de Recuperación</h6>
		</div>
	
		<div class="<?php echo $form->fieldClass($modelIngresoPorCuotasDeRecuperacion, 'consultas'); ?>">
			<?php echo $form->labelEx($modelIngresoPorCuotasDeRecuperacion,'consultas'); ?>
			<div class="input-prepend">
				<span class="add-on">$</span>	
				<?php echo $form->textField($modelIngresoPorCuotasDeRecuperacion,'consultas'); ?>
				<?php echo $form->error($modelIngresoPorCuotasDeRecuperacion,'consultas'); ?>
			</div>
		</div>		
		
		<hr class="bs-docs-separator"/>
					
		<div class="alert alert-info">		  
		  <h6>Ingresos por Colectas, Eventos, Rifas, Etc.</h6>
		</div>
	
		<div class="<?php echo $form->fieldClass($modelIngresoPorEvento, 'colectas'); ?>">
			<?php echo $form->labelEx($modelIngresoPorEvento,'colectas'); ?>
			<div class="input-prepend">
				<span class="add-on">$</span>	
				<?php echo $form->textField($modelIngresoPorEvento,'colectas'); ?>
				<?php echo $form->error($modelIngresoPorEvento,'colectas'); ?>
			</div>
		</div>
	
		<div class="<?php echo $form->fieldClass($modelIngresoPorEvento, 'eventos'); ?>">
			<?php echo $form->labelEx($modelIngresoPorEvento,'eventos'); ?>
			<div class="input-prepend">
				<span class="add-on">$</span>	
				<?php echo $form->textField($modelIngresoPorEvento,'eventos'); ?>
				<?php echo $form->error($modelIngresoPorEvento,'eventos'); ?>
			</div>
		</div>
	
		<div class="<?php echo $form->fieldClass($modelIngresoPorEvento, 'rifas'); ?>">
			<?php echo $form->labelEx($modelIngresoPorEvento,'rifas'); ?>
			<div class="input-prepend">
				<span class="add-on">$</span>	
				<?php echo $form->textField($modelIngresoPorEvento,'rifas'); ?>
				<?php echo $form->error($modelIngresoPorEvento,'rifas'); ?>
			</div>
		</div>
	
		<div class="<?php echo $form->fieldClass($modelIngresoPorEvento, 'conferencias'); ?>">
			<?php echo $form->labelEx($modelIngresoPorEvento,'conferencias'); ?>
			<div class="input-prepend">
				<span class="add-on">$</span>	
				<?php echo $form->textField($modelIngresoPorEvento,'conferencias'); ?>
				<?php echo $form->error($modelIngresoPorEvento,'conferencias'); ?>
			</div>
		</div>	
		
		<div class="<?php echo $form->fieldClass($modelIngresoPorEvento, 'ventas'); ?>">
			<?php echo $form->labelEx($modelIngresoPorEvento,'ventas'); ?>
			<div class="input-prepend">
				<span class="add-on">$</span>	
				<?php echo $form->textField($modelIngresoPorEvento,'ventas'); ?>
				<?php echo $form->error($modelIngresoPorEvento,'ventas'); ?>
			</div>
		</div>	
			
		<div class="<?php echo $form->fieldClass($modelIngresoPorEvento, 'otros'); ?>">
			<?php echo $form->labelEx($modelIngresoPorEvento,'otros'); ?>
			<div class="input-prepend">
				<span class="add-on">$</span>	
				<?php echo $form->textField($modelIngresoPorEvento,'otros'); ?>
				<?php echo $form->error($modelIngresoPorEvento,'otros'); ?>
			</div>
		</div>	
		
		<hr class="bs-docs-separator"/>	
				
		<div class="alert alert-info">		  
		  <h6>Gastos Asistenciales / Operativos</h6>
		</div>
	
		<div class="<?php echo $form->fieldClass($modelGastoOperativo, 'sueldos'); ?>">
			<?php echo $form->labelEx($modelGastoOperativo,'sueldos'); ?>
			<div class="input-prepend">
				<span class="add-on">$</span>
				<?php echo $form->textField($modelGastoOperativo,'sueldos'); ?>
				<?php echo $form->error($modelGastoOperativo,'sueldos'); ?>
			</div>
		</div>
		
		<div class="<?php echo $form->fieldClass($modelGastoOperativo, 'asimilables'); ?>">
			<?php echo $form->labelEx($modelGastoOperativo,'asimilables'); ?>
			<div class="input-prepend">
				<span class="add-on">$</span>
				<?php echo $form->textField($modelGastoOperativo,'asimilables'); ?>
				<?php echo $form->error($modelGastoOperativo,'asimilables'); ?>
			</div>
		</div>
	
		<div class="<?php echo $form->fieldClass($modelGastoOperativo, 'honorarios'); ?>">
			<?php echo $form->labelEx($modelGastoOperativo,'honorarios'); ?>
			<div class="input-prepend">
				<span class="add-on">$</span>		
				<?php echo $form->textField($modelGastoOperativo,'honorarios'); ?>
				<?php echo $form->error($modelGastoOperativo,'honorarios'); ?>
			</div>
		</div>
	
		<div class="<?php echo $form->fieldClass($modelGastoOperativo, 'combustibles'); ?>">
			<?php echo $form->labelEx($modelGastoOperativo,'combustibles'); ?>
			<div class="input-prepend">
				<span class="add-on">$</span>	
				<?php echo $form->textField($modelGastoOperativo,'combustibles'); ?>
				<?php echo $form->error($modelGastoOperativo,'combustibles'); ?>
			</div>
		</div>
	
		<div class="<?php echo $form->fieldClass($modelGastoOperativo, 'luzTelefono'); ?>">
			<?php echo $form->labelEx($modelGastoOperativo,'luzTelefono'); ?>
			<div class="input-prepend">
				<span class="add-on">$</span>
				<?php echo $form->textField($modelGastoOperativo,'luzTelefono'); ?>
				<?php echo $form->error($modelGastoOperativo,'luzTelefono'); ?>
			</div>
		</div>
	
		<div class="<?php echo $form->fieldClass($modelGastoOperativo, 'papeleria'); ?>">
			<?php echo $form->labelEx($modelGastoOperativo,'papeleria'); ?>
			<div class="input-prepend">
				<span class="add-on">$</span>
				<?php echo $form->textField($modelGastoOperativo,'papeleria'); ?>
				<?php echo $form->error($modelGastoOperativo,'papeleria'); ?>
			</div>
		</div>
	
		<div class="<?php echo $form->fieldClass($modelGastoOperativo, 'renta'); ?>">
			<?php echo $form->labelEx($modelGastoOperativo,'renta'); ?>
			<div class="input-prepend">
				<span class="add-on">$</span>
				<?php echo $form->textField($modelGastoOperativo,'renta'); ?>
				<?php echo $form->error($modelGastoOperativo,'renta'); ?>
			</div>
		</div>
	
		<div class="<?php echo $form->fieldClass($modelGastoOperativo, 'impuestosDerechos'); ?>">
			<?php echo $form->labelEx($modelGastoOperativo,'impuestosDerechos'); ?>
			<div class="input-prepend">
				<span class="add-on">$</span>
				<?php echo $form->textField($modelGastoOperativo,'impuestosDerechos'); ?>
				<?php echo $form->error($modelGastoOperativo,'impuestosDerechos'); ?>
			</div>
		</div>
	
		<div class="<?php echo $form->fieldClass($modelGastoOperativo, 'otros'); ?>">
			<?php echo $form->labelEx($modelGastoOperativo,'otros'); ?>
			<div class="input-prepend">
				<span class="add-on">$</span>
				<?php echo $form->textField($modelGastoOperativo,'otros'); ?>
				<?php echo $form->error($modelGastoOperativo,'otros'); ?>
			</div>
		</div>	
		
		<hr class="bs-docs-separator"/>
				
		<div class="alert alert-info">		  
		  <h6>Gastos Administrativos</h6>
		</div>
		
		<div class="<?php echo $form->fieldClass($modelGastoDeAdministracion, 'sueldos'); ?>">
			<?php echo $form->labelEx($modelGastoDeAdministracion,'sueldos'); ?>
			<div class="input-prepend">
				<span class="add-on">$</span>	
				<?php echo $form->textField($modelGastoDeAdministracion,'sueldos'); ?>
				<?php echo $form->error($modelGastoDeAdministracion,'sueldos'); ?>
			</div>
		</div>
		
		<div class="<?php echo $form->fieldClass($modelGastoDeAdministracion, 'asimilables'); ?>">
			<?php echo $form->labelEx($modelGastoDeAdministracion,'asimilables'); ?>
			<div class="input-prepend">
				<span class="add-on">$</span>	
				<?php echo $form->textField($modelGastoDeAdministracion,'asimilables'); ?>
				<?php echo $form->error($modelGastoDeAdministracion,'asimilables'); ?>
			</div>
		</div>
		
		<div class="<?php echo $form->fieldClass($modelGastoDeAdministracion, 'honorarios'); ?>">
			<?php echo $form->labelEx($modelGastoDeAdministracion,'honorarios'); ?>
			<div class="input-prepend">
				<span class="add-on">$</span>	
				<?php echo $form->textField($modelGastoDeAdministracion,'honorarios'); ?>
				<?php echo $form->error($modelGastoDeAdministracion,'honorarios'); ?>
			</div>
		</div>
		
		<div class="<?php echo $form->fieldClass($modelGastoDeAdministracion, 'combustibles'); ?>">
			<?php echo $form->labelEx($modelGastoDeAdministracion,'combustibles'); ?>
			<div class="input-prepend">
				<span class="add-on">$</span>
				<?php echo $form->textField($modelGastoDeAdministracion,'combustibles'); ?>
				<?php echo $form->error($modelGastoDeAdministracion,'combustibles'); ?>
			</div>
		</div>
		
		<div class="<?php echo $form->fieldClass($modelGastoDeAdministracion, 'luzTelefono'); ?>">
			<?php echo $form->labelEx($modelGastoDeAdministracion,'luzTelefono'); ?>
			<div class="input-prepend">
				<span class="add-on">$</span>	
				<?php echo $form->textField($modelGastoDeAdministracion,'luzTelefono'); ?>
				<?php echo $form->error($modelGastoDeAdministracion,'luzTelefono'); ?>
			</div>
		</div>
		
		<div class="<?php echo $form->fieldClass($modelGastoDeAdministracion, 'papeleria'); ?>">
			<?php echo $form->labelEx($modelGastoDeAdministracion,'papeleria'); ?>
			<div class="input-prepend">
				<span class="add-on">$</span>
				<?php echo $form->textField($modelGastoDeAdministracion,'papeleria'); ?>
				<?php echo $form->error($modelGastoDeAdministracion,'papeleria'); ?>
			</div>
		</div>
		
		<div class="<?php echo $form->fieldClass($modelGastoDeAdministracion, 'impuestosDerechos'); ?>">
			<?php echo $form->labelEx($modelGastoDeAdministracion,'impuestosDerechos'); ?>
			<div class="input-prepend">
				<span class="add-on">$</span>
				<?php echo $form->textField($modelGastoDeAdministracion,'impuestosDerechos'); ?>
				<?php echo $form->error($modelGastoDeAdministracion,'impuestosDerechos'); ?>
			</div>
		</div>
		
		<div class="<?php echo $form->fieldClass($modelGastoDeAdministracion, 'otros'); ?>">
			<?php echo $form->labelEx($modelGastoDeAdministracion,'otros'); ?>
			<div class="input-prepend">
				<span class="add-on">$</span>
				<?php echo $form->textField($modelGastoDeAdministracion,'otros'); ?>
				<?php echo $form->error($modelGastoDeAdministracion,'otros'); ?>
			</div>
		</div>		
		
		<hr class="bs-docs-separator"/>
		
		<div class="alert alert-info">
			<h6>Patrimonio Propio</h6>
		</div>
		
		<div class="<?php echo $form->fieldClass($modelInversion, 'tienePatrimonio'); ?>">
			<?php echo $form->labelEx($modelInversion,'tienePatrimonio'); ?>
			<div class="input-prepend">
				<span class="add-on"><i class="icon-book"></i></span>				
				<?php echo $form->dropDownList($modelInversion,'tienePatrimonio',array('1'=>'Si','0'=>'No'),array('empty'=>'Seleccione')); ?>
				<?php echo $form->error($modelInversion,'tienePatrimonio'); ?>
			</div>
		</div>
		
		<div class="<?php echo $form->fieldClass($modelInversion, 'institucionBancaria'); ?>">
			<?php echo $form->labelEx($modelInversion,'institucionBancaria'); ?>
			<div class="input-prepend">
				<span class="add-on">$</span>
				<?php echo $form->textField($modelInversion,'institucionBancaria'); ?>
				<?php echo $form->error($modelInversion,'institucionBancaria'); ?>
			</div>
		</div>
	
		<div class="<?php echo $form->fieldClass($modelInversion, 'terrenos'); ?>">
			<?php echo $form->labelEx($modelInversion,'terrenos'); ?>
			<div class="input-prepend">
				<span class="add-on">$</span>
				<?php echo $form->textField($modelInversion,'terrenos'); ?>
				<?php echo $form->error($modelInversion,'terrenos'); ?>
			</div>
		</div>
	
		<div class="<?php echo $form->fieldClass($modelInversion, 'inmuebles'); ?>">
			<?php echo $form->labelEx($modelInversion,'inmuebles'); ?>
			<div class="input-prepend">
				<span class="add-on">$</span>
				<?php echo $form->textField($modelInversion,'inmuebles'); ?>
				<?php echo $form->error($modelInversion,'inmuebles'); ?>
			</div>
		</div>
		
		<div class="<?php echo $form->fieldClass($modelInversion, 'equipoOficina'); ?>">
			<?php echo $form->labelEx($modelInversion,'equipoOficina'); ?>
			<div class="input-prepend">
				<span class="add-on">$</span>
				<?php echo $form->textField($modelInversion,'equipoOficina'); ?>
				<?php echo $form->error($modelInversion,'equipoOficina'); ?>
			</div>
		</div>
	
		<div class="<?php echo $form->fieldClass($modelInversion, 'equipoTransporte'); ?>">
			<?php echo $form->labelEx($modelInversion,'equipoTransporte'); ?>
			<div class="input-prepend">
				<span class="add-on">$</span>
				<?php echo $form->textField($modelInversion,'equipoTransporte'); ?>
				<?php echo $form->error($modelInversion,'equipoTransporte'); ?>
			</div>
		</div>
	
		<div class="<?php echo $form->fieldClass($modelInversion, 'otros'); ?>">
			<?php echo $form->labelEx($modelInversion,'otros'); ?>
			<div class="input-prepend">
				<span class="add-on">$</span>
				<?php echo $form->textField($modelInversion,'otros'); ?>
				<?php echo $form->error($modelInversion,'otros'); ?>
			</div>
		</div>
		
		<div class="alert alert-info">		  
		  <h3>Promoción</h3>
		</div>
		<div class="alert alert-info">		  
		  <h6>Selecciona en donde estás promocionándote</h6>
		</div>
		
		<table class="table table-condensed">
			<tr>
				<td style="width:100px;">
					<div class="<?php echo $form->fieldClass($modelInforme, 'periodico'); ?>">			
						<div class="input">
							
							<?php echo $form->checkBox($modelInforme,'periodico'); ?>
							<?php echo $form->error($modelInforme,'periodico'); ?>
						</div>
					</div>
				</td>
				<td style="width:100px;">
					<div class="<?php echo $form->fieldClass($modelInforme, 'radio'); ?>">			
						<div class="input">
							
							<?php echo $form->checkBox($modelInforme,'radio'); ?>
							<?php echo $form->error($modelInforme,'radio'); ?>
						</div>
					</div>
				</td>
				<td style="width:100px;">
					<div class="<?php echo $form->fieldClass($modelInforme, 'espectaculares'); ?>">			
						<div class="input">
							
							<?php echo $form->checkBox($modelInforme,'espectaculares'); ?>
							<?php echo $form->error($modelInforme,'espectaculares'); ?>
						</div>
					</div>
				</td>
				<td style="width:100px;">
					<div class="<?php echo $form->fieldClass($modelInforme, 'informeImpreso'); ?>">
						<div class="input">
							
							<?php echo $form->checkBox($modelInforme,'informeImpreso'); ?>
							<?php echo $form->error($modelInforme,'informeImpreso'); ?>
						</div>
					</div>
				</td>				
			</tr>
			<tr>
				<td>
					<div class="<?php echo $form->fieldClass($modelInforme, 'revistas'); ?>">
						<div class="input">
							
							<?php echo $form->checkBox($modelInforme,'revistas'); ?>
							<?php echo $form->error($modelInforme,'revistas'); ?>
						</div>
					</div>
				</td>
				<td>
					<div class="<?php echo $form->fieldClass($modelInforme, 'television'); ?>">
						<div class="input">
							
							<?php echo $form->checkBox($modelInforme,'television'); ?>
							<?php echo $form->error($modelInforme,'television'); ?>
						</div>
					</div>
				</td>
				<td>
					<div class="<?php echo $form->fieldClass($modelInforme, 'folletos'); ?>">
						<div class="input">
							
							<?php echo $form->checkBox($modelInforme,'folletos'); ?>
							<?php echo $form->error($modelInforme,'folletos'); ?>
						</div>
					</div>
				</td>
				<td>
					<div class="<?php echo $form->fieldClass($modelInforme, 'redesSociales'); ?>">
						<div class="input">
							
							<?php echo $form->checkBox($modelInforme,'redesSociales'); ?>
							<?php echo $form->error($modelInforme,'redesSociales'); ?>
						</div>
					</div>
				</td>
							
			</tr>
			<tr>
				<td>
					<div class="<?php echo $form->fieldClass($modelInforme, 'paginaWeb'); ?>">
						<div class="input">
							
							<?php echo $form->checkBox($modelInforme,'paginaWeb'); ?>
							<?php echo $form->error($modelInforme,'paginaWeb'); ?>
						</div>
					</div>
				</td>	
				<td>
					<div class="<?php echo $form->fieldClass($modelInforme, 'otros'); ?>">
						<div class="input">
							
							<?php echo $form->checkBox($modelInforme,'otros'); ?>
							<?php echo $form->error($modelInforme,'otros'); ?>
						</div>
					</div>
				</td>
				<td>
					<div class="<?php echo $form->fieldClass($modelInforme, 'ninguna'); ?>">
						<div class="input">
							
							<?php echo $form->checkBox($modelInforme,'ninguna'); ?>
							<?php echo $form->error($modelInforme,'ninguna'); ?>
						</div>
					</div>
				</td>
				<td>
				
				</td>
			</tr>
		</table>		
		<div class="<?php echo $form->fieldClass($modelInforme, 'responsableLlenado'); ?>">
			<?php echo $form->labelEx($modelInforme,'responsableLlenado'); ?>
			<div class="input-prepend">
				<span class="add-on">Texto</span>
				<?php echo $form->textField($modelInforme,'responsableLlenado'); ?>
				<?php echo $form->error($modelInforme,'responsableLlenado'); ?>
			</div>
		</div>
		<div class="form-actions">
		  <?php echo BHtml::submitButton($modelDonativo->isNewRecord ? 'Guardar Informe' : 'Modificar Informe'); ?>
		  <?php echo CHtml::button('Cancelar', array('submit' => array('site/index'), 'class'=>'btn')); ?>
		</div>				
				
		<?php $this->endWidget(); ?>
	
	</div><!-- form -->
</div>
  