<div class="form">

<?php $form=$this->beginWidget('BActiveForm', array(
	'id'=>'institucion-form',
	'enableAjaxValidation'=>false,
)); ?>

	<div class="alert alert-info">		  
	  <h4>Datos generales</h4>
	  Por favor introduzca la información que se pide a continuación.
	</div>

	<?php echo $form->errorSummary($model); ?>

	<div class="<?php echo $form->fieldClass($model, 'nombre'); ?>">
		<?php echo $form->labelEx($model,'nombre'); ?>
		<div class="input">
			<a href="#" class="tooltipmessage" rel="tooltip" title="Escriba el nombre de la Institución">
				<?php echo $form->textField($model,'nombre',array('size'=>60,'maxlength'=>145)); ?>
				<?php echo $form->error($model,'nombre'); ?>
			</a>
		</div>	
		
	</div>

	<div class="<?php echo $form->fieldClass($model, 'siglas'); ?>">
		<?php echo $form->labelEx($model,'siglas'); ?>
		<div class="input">
			
			<?php echo $form->textField($model,'siglas',array('size'=>45,'maxlength'=>45)); ?>
			<?php echo $form->error($model,'siglas'); ?>
		</div>
	</div>

	<div class="<?php echo $form->fieldClass($model, 'mision'); ?>">
		<?php echo $form->labelEx($model,'mision'); ?>
		<div class="input">
			
			<?php echo $form->textArea($model,'mision',array('rows'=>6, 'cols'=>50)); ?>
			<?php echo $form->error($model,'mision'); ?>
		</div>
	</div>

	<div class="<?php echo $form->fieldClass($model, 'vision'); ?>">
		<?php echo $form->labelEx($model,'vision'); ?>
		<div class="input">
			
			<?php echo $form->textArea($model,'vision',array('rows'=>6, 'cols'=>50)); ?>
			<?php echo $form->error($model,'vision'); ?>
		</div>
	</div>
	
	<div class="<?php echo $form->fieldClass($model, 'ambito_did'); ?>">
	<?php echo $form->labelEx($model,'ambito_did'); ?>
        <div class="input">
		<?php 
              echo $form->dropDownList($model, 'ambito_did',
              CHtml::listData(Ambito::model()->findAll(), 'id', 'nombre'),
                    array(
                    'ajax' => array(
                    'type'=>'POST', //request type
                    'url'=>CController::createUrl('institucion/actualizaactividad'), //url to call.
                    'update'=>'#' . CHtml::activeId($model, 'actividadPreponderante_did'), //selector to update
                    'data'=>array('ambito_did'=>'js:this.value')
                    ),'prompt'=>'Seleccione')); 
            ?>
            <?php echo $form->error($model,'donativoDeducible'); ?>
        </div>
    </div>
	
	<div class="<?php echo $form->fieldClass($model, 'actividadPreponderante_did'); ?>">
		<?php echo $form->labelEx($model,'actividadPreponderante_did'); ?>
		<div class="input">
			<?php
            if (empty($model->ambito_did))
                $actividades= array();
            else
                $actividades= ActividadPreponderante::model()->findAll(array('condition'=>'ambito_did='.$model->ambito_did));
            echo $form->dropDownList($model,'actividadPreponderante_did',CHtml::listData($actividades, 'id', 'nombre')
                         ,array('empty'=>'Seleccione una Actividad')); ?>
			
			<?php echo $form->error($model,'actividadPreponderante_did'); ?>
		</div>
	</div>
	
	<div class="<?php echo $form->fieldClass($model, 'domicilioCalle'); ?>">
		<?php echo $form->labelEx($model,'Calle'); ?>
		<div class="input">
			<?php echo $form->textField($model,'domicilioCalle',array('size'=>60,'maxlength'=>145)); ?>
			<?php echo $form->error($model,'domicilioCalle'); ?>
		</div>
	</div>
	
	<div class="<?php echo $form->fieldClass($model, 'domicilioColonia'); ?>">
		<?php echo $form->labelEx($model,'Colonia'); ?>
		<div class="input">
			<?php echo $form->textField($model,'domicilioColonia',array('size'=>60,'maxlength'=>145)); ?>
			<?php echo $form->error($model,'domicilioColonia'); ?>
		</div>
	</div>

	<div class="<?php echo $form->fieldClass($model, 'domicilioCP'); ?>">
		<?php echo $form->labelEx($model,'domicilioCP'); ?>
		<div class="input">
			
			<?php echo $form->textField($model,'domicilioCP',array('size'=>45,'maxlength'=>45)); ?>
			<?php echo $form->error($model,'domicilioCP'); ?>
		</div>
	</div>

	<div class="<?php echo $form->fieldClass($model, 'domicilioMunicipio_aid'); ?>">
		<?php echo $form->labelEx($model,'domicilioMunicipio_aid'); ?>
		<div class="input">
			
			<?php echo  ''; ?> <?php $this->widget('ext.custom.widgets.EJuiAutoCompleteFkField', array(
						'model'=>$model, 
						'attribute'=>'domicilioMunicipio_aid', 
						'sourceUrl'=>Yii::app()->createUrl('municipio/autocompletesearch'), 
						'showFKField'=>false,
						'relName'=>'domicilioMunicipio', // the relation name defined above
						'displayAttr'=>'nombre',  // attribute or pseudo-attribute to display						
						'options'=>array(
							'minLength'=>1, 
						),
					)); ?>
			<?php echo $form->error($model,'domicilioMunicipio_aid'); ?>
		</div>
	</div>

	<div class="<?php echo $form->fieldClass($model, 'contactoTelefono'); ?>">
		<?php echo $form->labelEx($model,'contactoTelefono'); ?>
		<div class="input">
			
			<?php echo $form->textField($model,'contactoTelefono',array('size'=>45,'maxlength'=>45)); ?>
			<?php echo $form->error($model,'contactoTelefono'); ?>
		</div>
	</div>

	<div class="<?php echo $form->fieldClass($model, 'contactoEmail'); ?>">
		<?php echo $form->labelEx($model,'contactoEmail'); ?>
		<div class="input">
			
			<?php echo $form->textField($model,'contactoEmail',array('size'=>60,'maxlength'=>145)); ?>
			<?php echo $form->error($model,'contactoEmail'); ?>
		</div>
	</div>
	
	<div class="<?php echo $form->fieldClass($model, 'paginaWeb'); ?>">
        <?php echo $form->labelEx($model,'paginaWeb'); ?>
        <div class="input">
            <?php echo $form->textField($model,'paginaWeb',array('size'=>60,'maxlength'=>145)); ?>
            <?php echo $form->error($model,'paginaWeb'); ?>
        </div>
    </div>

	<div class="<?php echo $form->fieldClass($model, 'fechaConstitucion_dt'); ?>">
		<?php echo $form->labelEx($model,'fechaConstitucion_dt'); ?>
		<div class="input">
			
			<?php 
			$this->widget('zii.widgets.jui.CJuiDatePicker',
			array(
				'model'=>$model,
				'attribute'=>'fechaConstitucion_dt',
				'language'=>'es',
				'options'=> array(
					'dateFormat'=>'yy-mm-dd', 
					'altFormat'=>'dd-mm-yy', 
					'changeMonth'=>'true', 
					'changeYear'=>'true', 
					'yearRange'=>'1950:'.date('Y'), 
					'showOn'=>'both',
					'buttonText'=>'<i class="icon-calendar"></i>'
				),
			));
			
			?>	
			<?php echo $form->error($model,'fechaConstitucion_dt'); ?>
		</div>
	</div>

	<div class="<?php echo $form->fieldClass($model, 'fechaTransformacion_dt'); ?>">
		<?php echo $form->labelEx($model,'fechaTransformacion_dt'); ?>
		<div class="input">
			
			<?php 
			$this->widget('zii.widgets.jui.CJuiDatePicker',
			array(
				'model'=>$model,
				'attribute'=>'fechaTransformacion_dt',
				'language'=>'es',
				'options'=> array(
					'dateFormat'=>'yy-mm-dd', 
					'altFormat'=>'dd-mm-yy', 
					'changeMonth'=>'true', 
					'changeYear'=>'true', 
					'yearRange'=>'1990:'.date('Y'), 
					'showOn'=>'both',
					'buttonText'=>'<i class="icon-calendar"></i>'
				),
			));
			
			?>	
			<?php echo $form->error($model,'fechaTransformacion_dt'); ?>
		</div>
	</div>

	<div class="<?php echo $form->fieldClass($model, 'rfc'); ?>">
		<?php echo $form->labelEx($model,'rfc'); ?>
		<div class="input">
			
			<?php echo $form->textField($model,'rfc',array('size'=>13,'maxlength'=>13)); ?>
			<?php echo $form->error($model,'rfc'); ?>
		</div>
	</div>	
	
	<div class="<?php echo $form->fieldClass($model, 'donativoDeducible'); ?>">
        <?php echo $form->labelEx($model,'donativoDeducible'); ?>
        <div class="input">
            <?php 
                  echo $form->dropDownList($model,'donativoDeducible', 
                  	array(2=>'Por definir',1=>'Si',0=>'No'),
                        array(
                        'ajax' => array(
	                        'type'=>'POST', //request type
	                        'url'=>CController::createUrl('institucion/actualizadeducibles'), //url to call.
	                        'update'=>'#Institucion_donativoConvenio', //selector to update
                        ))); 
            ?>
            <?php echo $form->error($model,'donativoDeducible'); ?>
        </div>
    </div>
	<?php 
		//echo '<pre>'; print_r($model->attributes); echo '</pre>';
		$posibles_convenios = array();
		if($model->donativoDeducible==1)
			$posibles_convenios = array(1=>'Nacional',2=>'Nacional/Extranjera');
		else if($model->donativoDeducible==0 || $model->donativoDeducible==2)
			$posibles_convenios = array(0=>'Ninguna');		
	?>
	
	<div class="<?php echo $form->fieldClass($model, 'donativoConvenio'); ?>">
		<?php echo $form->labelEx($model,'donativoConvenio'); ?>
		<div class="input">
			
			<?php echo $form->dropDownList($model,'donativoConvenio', $posibles_convenios ); ?>			
			<?php echo $form->error($model,'donativoConvenio'); ?>
		</div>
	</div>
	
	<div class="<?php echo $form->fieldClass($model, 'dictaminas'); ?>">
        <?php echo $form->labelEx($model,'dictaminas'); ?>
        <div class="input">
            <?php echo $form->dropDownList($model,'dictaminas',array(0=>'No',1=>'Si')); ?>
            <?php echo $form->error($model,'dictaminas'); ?>
        </div>
    </div>

	<div class="<?php echo $form->fieldClass($model, 'cluni'); ?>">
		<?php echo $form->labelEx($model,'cluni'); ?>
		<div class="input">
			
			<?php echo $form->textField($model,'cluni',array('size'=>45,'maxlength'=>45)); ?>
			<?php echo $form->error($model,'cluni'); ?>
		</div>
	</div>
    
    
	<div class="<?php echo $form->fieldClass($model, 'areageografica_did'); ?>">
		<?php echo $form->labelEx($model,'areageografica_did'); ?>
		<div class="input">
			
			<?php echo $form->dropDownList($model,'areageografica_did',CHtml::listData(AreaGeografica::model()->findAll(), 'id', 'nombre')); ?>
			<?php echo $form->error($model,'areageografica_did'); ?>
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
