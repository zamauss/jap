<?php
	$this->pageCaption='';
	$this->pageTitle=Yii::app()->name;
	
	$usuarioActual = Usuario::model()->find('usuario=:x',array(':x'=>Yii::app()->user->name));
	$ejercicioFiscal = EjercicioFiscal::model()->find('estatus_did=1');
	$config = Configuracion::model()->find('estatus_did=1 && ejercicioFiscal_did=:ejercicio',array(':ejercicio'=>$ejercicioFiscal->id));
	$esEditable = Institucion::model()->esEditable($config->fechaInicioEdicion, date('Y-m-d'), $config->fechaFinalEdicion);
?>
<?php if($usuarioActual->institucion->usuario->tipousuario->nombre == "Administrador"){ ?>
	<div class="well">
		<?php echo CHtml::button('Da click aquí y regístrate', array('submit' => array('update','id'=>$usuarioActual->institucion_aid), 										'class'=>'btn btn-large btn-primary', 'style'=>'width:100%; font-size:14pt;'));  ?>
	</div>
<?php } else { 
	setlocale(LC_TIME, 'es_MX');
	$fecha=strftime('%d de %B de %Y',strtotime($config->fechaFinalEdicion));
?>
	<div class="alert alert-info">
	  <p style="font-size=24pt; text-align:center;"><b>¡Gracias!  La fecha límite para mandar la información es el <?php echo $fecha; ?></b><br/>    
	  <?php echo CHtml::button('Actualice su registro', array('submit' => array('update','id'=>$usuarioActual->institucion_aid), 'class'=>'btn btn-small', 'style'=>''));  ?>
	</div>
<?php } ?>

<div class="row">
	<div style="width:100%; text-align:center">
		<div class="span4">
			<ul class="thumbnails">
			<li class="span4">
				<div class="thumbnail">				
				<img src="<?php echo Yii::app()->baseUrl . '/images/informe.png'; ?>" alt="iap"/>
					<div class="caption">
						<div style="height:80px;">
							<p style="text-align:left">Acciones realizadas por la institución en el ejercicio inmediato anterior.</p>							
						</div>
						<br/><br/>
						<p>
							<?php
						    	$hechoIngreso = IngresoPorDonativo::model()->find('institucion_aid=:inst',
						    	array(':inst'=>$usuarioActual->institucion->id));
						    	if(isset($hechoIngreso))
						    	{
							    	if($esEditable)
							    	{
							    		echo CHtml::link('Imprimir Reporte', 
							    			array('reporteinformedeactividades','institucion'=>$hechoIngreso->institucion->id, 'iap'=>'1'),
							    			array('class'=>'btn btn btn-large'));
								    	echo CHtml::button('Modificar', 
							    			array('submit' => 'actualizaringreso','class'=>'btn btn-large btn-primary', 'style'=>'width:100%'));
							    	}
							    	else							    		
							    		echo CHtml::link('Imprimir Reporte', 
							    			array('reporteinformedeactividades','institucion'=>$hechoIngreso->institucion->id),
							    			array('class'=>'btn btn btn-large'));   	    	
						    	}
						    	else
						    	{					    		
							    	if($esEditable)
							    	{
							    		echo CHtml::button('Crear', 
							    			array('submit' => 'crearingreso','class'=>'btn btn-large btn-primary', 'style'=>'width:100%'));
							    	}							    		
							    	else
							    		echo CHtml::button('No Realizado', 
							    		array('','class'=>'btn btn-large disabled', 'style'=>'width:100%'));     	    	
						    	}
						    ?>
						</p>
					</div>
				</div>
			</li>
			<ul>
		</div>
		<div class="span4">
			<ul class="thumbnails">
			<li class="span4">
				<div class="thumbnail">				
				<img src="<?php echo Yii::app()->baseUrl . '/images/programa.png'; ?>" alt="iap"/>
					<div class="caption">
						<div style="height:80px;">
							<p style="text-align:left">Actividades que se llevarán a cabo para concretar los fines de la institución.</p>
						</div>
						<br/><br/>						
						<p>
							<?php 
							try {
							$hechoPrograma = ProgramaDeTrabajo::model()->find('institucion_id=:inst and  ejercicio_fiscal_id=:ejer',
						    	array(':inst'=>$usuarioActual->institucion->id, ':ejer'=>$ejercicioFiscal->id))->programas;
						    	} catch (Exception $e) {}
							if($esEditable){
								if($hechoPrograma)
								{
									echo CHtml::link('Imprimir Reporte', 
							    			array('reporteprogramas','institucion'=>$usuarioActual->institucion->id),
							    			array('class'=>'btn btn btn-large'));
									echo CHtml::button('Modificar', array('submit' => 
									array('institucion/programa'),'class'=>'btn btn-large btn-primary', 'style'=>'width:100%'));
								}
								else{									
									echo CHtml::button('Crear', array('submit' => 
									array('institucion/programa'),'class'=>'btn btn-large btn-primary', 'style'=>'width:100%'));
								} 
							} 
							else{
								if($hechoPrograma){
									echo CHtml::link('Imprimir Reporte', 
							    			array('reporteprogramas','institucion'=>$usuarioActual->institucion->id),
							    			array('class'=>'btn btn btn-large'));
								}
								else{
									echo CHtml::button('No Realizado', 
							    		array('','class'=>'btn btn-large disabled', 'style'=>'width:100%'));
								}
							}
							
							?>
						</p>
					</div>
				</div>
			</li>
			<ul>
		</div>	
		<div class="span4">
			<ul class="thumbnails">
			<li class="span4">
				<div class="thumbnail">				
				<img src="<?php echo Yii::app()->baseUrl . '/images/presupuesto.png'; ?>" alt="iap"/>
					<div class="caption">
						<div style="height:80px;">
							<p style="text-align:left">Estimación de ingresos y egresos que necesita para llevar a cabo su programa de trabajo.</p>
						</div>
						<br/><br/>
						<p>
							<?php 
						    	$hechoPresupuesto = Presupuesto::model()->find('institucion_aid=:inst',
						    	array(':inst'=>$usuarioActual->institucion->id));
						    	if(isset($hechoPresupuesto))
						    	{
							    	if($esEditable)
							    	{
							    		echo CHtml::link('Imprimir Reporte', 
							    			array('reportepresupuesto','institucion'=>$hechoIngreso->institucion->id),
							    			array('class'=>'btn btn btn-large'));
							    		echo CHtml::button('Modificar', array('submit' => array('presupuesto/update','id'=>$hechoPresupuesto->id, 'nombre'=>$usuarioActual->institucion->nombre ),'class'=>'btn btn-large btn-primary', 'style'=>'width:100%'));
							    	}
							    	else
							    		echo CHtml::link('Imprimir Reporte', 
							    			array('reportepresupuesto','institucion'=>$hechoIngreso->institucion->id),
							    			array('class'=>'btn btn btn-large'));						    	
						    	}
						    	else
						    	{
							    	if($esEditable)
							    	{
								    	echo CHtml::button('Crear', array('submit' => array('presupuesto/create','institucion_aid'=>$usuarioActual->institucion->id),'class'=>'btn btn-large btn-primary', 'style'=>'width:100%'));
							    	}
							    		
							    	else
							    		echo CHtml::button('No Realizado', 
							    		array('','class'=>'btn btn-large disabled', 'style'=>'width:100%'));     	    	
						    	}
						    ?>
						</p>
					</div>
				</div>
			</li>
			<ul>
		</div>
	</div>
</div>
