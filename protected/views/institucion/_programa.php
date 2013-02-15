<div style="text-align:right;">
	<button class="btn btn-primary" type="button" onclick="window.print();">Imprimir Formulario</button>
</div>
<br/>
<div class="well">
<div class="form">

<?php Yii::app()->clientScript->registerScriptFile(
    Yii::app()->baseUrl.'/js/jquery.sheepItPlugin.js'
); ?>
<?php Yii::app()->getClientScript()->registerCoreScript( 'jquery.ui' ); 
Yii::app()->clientScript->registerCssFile(
  Yii::app()->clientScript->getCoreScriptUrl().'/jui/css/base/jquery-ui.css');?>
<?php $form=$this->beginWidget('BActiveForm', array(
	'id'=>'programa-form',
	'enableAjaxValidation'=>false,
)); ?>
<?php echo $form->errorSummary($model); ?>

	<div id="sheepItForms">
		<div class='well' id="sheepItForms_template" >
				<div class="alert alert-info">		  
			 		<h4>Datos generales del programa #index#</h4>
				</div>
				

	
				<div class='row-fluid'>
					<div class='span6'>
						<div class="<?php echo $form->fieldClass($model, 'nombre'); ?>">
							<?php echo $form->labelEx($model,'nombre'); ?>
							<div class="input-prepend">
								<span class="add-on">Texto</span>
								<?php echo $form->textField($model,'nombre',array(
								'size'=>60,
								'maxlength'=>145,
								'id'=>'sheepItForm_#index#_nombre',
								'name'=>'Programa[#index#][nombre]')); ?>
								<?php echo $form->hiddenField($model,'id',array(
								'name'=>'Programa[#index#][id]',
								'id'=>'sheepItForm_#index#_id',)); ?>
								<?php //echo $form->error($model,'nombre'); ?>
							</div>
						</div>
					</div>
					<div class='span6'>
						<div class="<?php echo $form->fieldClass($model, 'categoria'); ?>">
							<?php echo $form->labelEx($model,'categoria'); ?>
							<div class="input-prepend">
								<span class="add-on">Selc.</span>
								
								<?php //echo $form->textField($model,'ambito'); ?>
								<?php

									echo $form->dropDownList($model,'categoria',$model->getCategoriaLabels(),array('empty'=>'Seleccione',
										'id'=>'sheepItForm_#index#_categoria',
								'name'=>'Programa[#index#][categoria]', 'type'=>'select-one')); ?>
								<?php //echo $form->error($model,'ambito'); ?>
							</div>
						</div>
				
					</div>
					
				</div>
				<div class='row-fluid'>
					<div class='span6'>
						<div class="<?php echo $form->fieldClass($model, 'objetivos'); ?>">
							<?php echo $form->labelEx($model,'objetivos'); ?>
							<div class="input-prepend">
								<span class="add-on">Lista</span>
								<?php  echo $form->textArea($model,'objetivos',array('rows'=>6, 'cols'=>50,'id'=>'sheepItForm_#index#_objetivos',
								'name'=>'Programa[#index#][objetivos]', 'type'=>'textarea')); ?>
								<?php /*$this->widget('ext.ETagger.ETagger', array(
										        'model'=>$model,
										        'attribute'=>'objetivos',
										        'options'=> array(
										            'closeChar'=>'X',
										            'separator'=>'|',

										        ),));*/?>
								<?php //echo $form->error($model,'objetivos'); ?>
							</div>
						</div>
					</div>
					<div class='span6'>
						<div class="<?php echo $form->fieldClass($model, 'metas'); ?>">
							<?php echo $form->labelEx($model,'metas'); ?>
							<div class="input-prepend">
								<span class="add-on">Lista</span>
								<?php echo $form->textArea($model,'metas',array('rows'=>6, 'cols'=>50,'id'=>'sheepItForm_#index#_metas',
								'name'=>'Programa[#index#][metas]', 'type'=>'textarea')); ?>
								<?php /*$this->widget('ext.ETagger.ETagger', array(
										        'model'=>$model,
										        'attribute'=>'metas',
										      
										        'options'=> array(
										            'closeChar'=>'X',
										            'separator'=>'|',

										        ),)); */?>
								<?php //echo $form->error($model,'metas'); ?>
							</div>
						</div>
					</div>
					
				</div>

				<div class='row-fluid'>
					<div class='span6'>
						<div class="<?php echo $form->fieldClass($model, 'fechaInicio_dt'); ?>">
							<?php echo $form->labelEx($model,'fechaInicio_dt'); ?>
							<div class="input-prepend">
								<span class="add-on">Fecha</span>
								<?php echo $form->textField($model,'fechaInicio_dt',array(

								
								'id'=>'sheepItForm_#index#_fechaInicio_dt',
								'name'=>'Programa[#index#][fechaInicio_dt]')); ?>
								<?php echo $form->error($model,'fechaInicio_dt'); ?>
							</div>
						</div>
						
					</div>
					<div class='span6'>
						<div class="<?php echo $form->fieldClass($model, 'fechaFin_dt'); ?>">
							<?php echo $form->labelEx($model,'fechaFin_dt'); ?>
							<div class="input-prepend">
								<span class="add-on">Fecha</span>
								<?php echo $form->textField($model,'fechaFin_dt',array(
	
								
								'id'=>'sheepItForm_#index#_fechaFin_dt',
								'name'=>'Programa[#index#][fechaFin_dt]')); ?>
								<?php echo $form->error($model,'fechaFin_dt'); ?>
							</div>
						</div>
					</div>
					
				</div>
				
				
				<div class='row-fluid'>
					<div class='span6'>
						<div class="<?php echo $form->fieldClass($model, 'ambito'); ?>">
							<?php echo $form->labelEx($model,'ambito'); ?>
							<div class="input-prepend">
								<span class="add-on">Selc.</span>
								
								<?php //echo $form->textField($model,'ambito'); ?>
								<?php

									echo $form->dropDownList($model,'ambito',$model->getAmbitoLabels(),array('empty'=>'Seleccione',
										'id'=>'sheepItForm_#index#_ambito',
								'name'=>'Programa[#index#][ambito]', 'type'=>'select-one')); ?>
								<?php //echo $form->error($model,'ambito'); ?>
							</div>
						</div>
				
					</div>
					<div class='span6'>
						<div class="<?php echo $form->fieldClass($model, 'recursos_humanos'); ?>">
							<?php echo $form->labelEx($model,'recursos_humanos'); ?>
							<div class="input-prepend">
								<span class="add-on">Lista</span>
								
								<?php echo $form->textArea($model,'recursos_humanos',array('rows'=>6, 'cols'=>50,'id'=>'sheepItForm_#index#_recursos_humanos',
								'name'=>'Programa[#index#][recursos_humanos]', 'type'=>'textarea')); ?>
								<?php /*$this->widget('ext.ETagger.ETagger', array(
										        'model'=>$model,
										        'attribute'=>'recursos_humanos',
										       
										        'options'=> array(
										            'closeChar'=>'X',
										            'separator'=>'|',
										        ),));*/ ?>
								<?php //echo $form->error($model,'recursos_humanos'); ?>
							</div>
						</div>
					</div>
					
				</div>
				<div class='row-fluid'>
					<div class='span6'>
						<div class="<?php echo $form->fieldClass($model, 'recursos_materiales'); ?>">
							<?php echo $form->labelEx($model,'recursos_materiales'); ?>
							<div class="input-prepend">
								<span class="add-on">Lista</span>
								<?php echo $form->textArea($model,'recursos_materiales',array('rows'=>6, 'cols'=>50,'id'=>'sheepItForm_#index#_recursos_materiales',
								'name'=>'Programa[#index#][recursos_materiales]', 'type'=>'textarea')); ?>
								<?php /*$this->widget('ext.ETagger.ETagger', array(
										        'model'=>$model,
										        'attribute'=>'recursos_materiales',
										        'options'=> array(
										            'closeChar'=>'X',
										            'separator'=>'|',
										        ),));*/ ?>
								<?php //echo $form->error($model,'recursos_materiales'); ?>
							</div>
						</div>
					</div>
					<div class='span6'>
						<div class="<?php echo $form->fieldClass($model, 'recursos_financieros'); ?>">
							<?php echo $form->labelEx($model,'recursos_financieros'); ?>
							<div class="input-prepend">
								<span class="add-on">Lista</span>
								<?php echo $form->textArea($model,'recursos_financieros',array('rows'=>6, 'cols'=>50,'id'=>'sheepItForm_#index#_recursos_financieros',
								'name'=>'Programa[#index#][recursos_financieros]', 'type'=>'textarea')); ?>
								<?php /*$this->widget('ext.ETagger.ETagger', array(
										        'model'=>$model,
										        'attribute'=>'recursos_financieros',
										        'options'=> array(
										        	'closeChar'=>'X',
										            'separator'=>'|',
										            
										        ),));*/ ?>
								<?php //echo $form->error($model,'recursos_financieros'); ?>
							</div>
						</div>
					</div>
					
					
				</div>
			</div>
		<div id="sheepItForms_noforms_template"></div>

		<div id="sheepItForms_controls" style='text-align:right'>
			<div id="sheepItForms_add">
				<a class='btn'><span>Agregar Programa</span></a>
			</div>
		</div>
</div>
	




	<div class="actions">
		<?php echo BHtml::submitButton('Guardar'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->
</div>




<script type="text/javascript">

var sheepItForms; 

 $("#sheepItForms").ready(function() {
     
    sheepItForms = $('#sheepItForms').sheepIt({
        separator: '',
        allowRemoveLast: true,
        allowRemoveCurrent: true,
        allowRemoveAll: true,
        allowAdd: true,
        allowAddN: true,
        maxFormsCount: 100,
        minFormsCount: 1,
        iniFormsCount:  1,
		afterAdd: function(source, newForm) {
            try
			{
			
				$("#sheepItForm_"+sheepItForms.getFormsCount()+"_fechaInicio_dt").datepicker();		
				$("#sheepItForm_"+sheepItForms.getFormsCount()+"_fechaInicio_dt").datepicker( "option", "dateFormat","yy-mm-dd");	
				$("#sheepItForm_"+sheepItForms.getFormsCount()+"_fechaFin_dt").datepicker( );	
				$("#sheepItForm_"+sheepItForms.getFormsCount()+"_fechaFin_dt").datepicker( "option", "dateFormat","yy-mm-dd");	

			}
			catch(err)
			{

				$("#sheepItForm_1_fechaInicio_dt").datepicker( );	
				$("#sheepItForm_1_fechaInicio_dt").datepicker("option", "dateFormat","yy-mm-dd" );				
				$("#sheepItForm_1_fechaFin_dt").datepicker();
				$("#sheepItForm_1_fechaFin_dt").datepicker("option", "dateFormat","yy-mm-dd" );
			}

        },
        data: <?php echo $jsonprogs; ?>
    });
   });
 </script>
