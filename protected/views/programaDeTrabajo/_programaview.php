	
	<div class="well">
		<div class="row-fluid">
			<div class="span6">
				<div class="span1">
					<b>
						<?php echo CHtml::encode($data->getAttributeLabel('nombre')).':'; ?>
					</b>
				</div>
				<div class="span4">
					<?php echo CHtml::encode($data->nombre); ?>
				</div>
			</div>
			<div class="span6">
				<div class="span1">
					<b>
						<?php echo CHtml::encode($data->getAttributeLabel('categoria')).':'; ?>
					</b>
				</div>
				<div class="span4">
					<?php echo CHtml::encode($data->CategoriaLabels[$data->categoria]); ?>
				</div>
			</div>
		</div>
		<div class="row-fluid">
			<div class="span6">
				<div class="span1">
					<b>
						<?php echo CHtml::encode($data->getAttributeLabel('objetivos')).':'; ?>
					</b>
				</div>
				<div class="span4">
					<?php echo CHtml::encode($data->objetivos); ?>
				</div>
			</div>
			<div class="span6">
				<div class="span1">
					<b>
						<?php echo CHtml::encode($data->getAttributeLabel('metas')).':'; ?>
					</b>
				</div>
				<div class="span4">
					<?php echo CHtml::encode($data->metas); ?>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="span5">
				<div class="span1">
					<b>
						<?php echo CHtml::encode($data->getAttributeLabel('fechaInicio_dt')).':'; ?>
					</b>
				</div>
				<div class="span3">
					<?php echo CHtml::encode($data->fechaInicio_dt); ?>
				</div>
			</div>
			<div class="span5">
				<div class="span1">
					<b>
						<?php echo CHtml::encode($data->getAttributeLabel('fechaFin_dt')).':'; ?>
					</b>
				</div>
				<div class="span3">
					<?php echo CHtml::encode($data->fechaFin_dt); ?>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="span5">
				<div class="span1">
					<b>
						<?php echo CHtml::encode($data->getAttributeLabel('ambito')).':'; ?>
					</b>
				</div>
				<div class="span3">
					<?php echo CHtml::encode($data->AmbitoLabels[$data->ambito]); ?>
				</div>
			</div>
			<div class="span5">
				<div class="span1">
					<b>
						<?php echo CHtml::encode($data->getAttributeLabel('recursos_humanos')).':'; ?>
					</b>
				</div>
				<div class="span3">
					<?php echo CHtml::encode($data->recursos_humanos); ?>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="span5">
				<div class="span1">
					<b>
						<?php echo CHtml::encode($data->getAttributeLabel('recursos_materiales')).':'; ?>
					</b>
				</div>
				<div class="span3">
					<?php echo CHtml::encode($data->recursos_materiales); ?>
				</div>
			</div>
			<div class="span5">
				<div class="span1">
					<b>
						<?php echo CHtml::encode($data->getAttributeLabel('recursos_financieros')).':'; ?>
					</b>
				</div>
				<div class="span3">
					<?php echo CHtml::encode($data->recursos_financieros); ?>
				</div>
			</div>
		</div>
	</div>